import store from "./index";

class Cart {
    constructor(sessionId) {
        this.items = [];
        this.total = 0;
        this.sessionId = sessionId;
    }

    async add(car, quantity = 1) {
        const index = this.items.findIndex(item => item.car.id === car.id);
        if (index === -1) {
            this.items.push({ car, quantity });
        } else {
            this.items[index].quantity += quantity;
        }
        this.total += car.price * quantity;

        if (store.state.user) {
            await axios.post('/api/cart', { car_id: car.id, quantity });
        } else {
            localStorage.setItem(`cart_${this.sessionId}`, JSON.stringify(this.items));
        }
    }

    async remove(item) {
        const index = this.items.indexOf(item);
        if (index !== -1) {
            this.total -= item.car.price * item.quantity;
            this.items.splice(index, 1);
            if (store.state.user) {
                await axios.delete(`/api/cart/${item.id}`);
            } else {
                localStorage.setItem(`cart_${this.sessionId}`, JSON.stringify(this.items));
            }
        }
    }

    async update(item, quantity) {
        const index = this.items.indexOf(item);
        if (index !== -1) {
            const diff = quantity - item.quantity;
            this.total += item.car.price * diff;
            item.quantity = quantity;

            if (store.state.user) {
                await axios.put(`/api/cart/${item.id}`, { quantity });
            } else {
                localStorage.setItem(`cart_${this.sessionId}`, JSON.stringify(this.items));
            }
        }
    }
}
