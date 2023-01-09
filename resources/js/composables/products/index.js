
import { ref } from "vue";

export default function useProduct() {

   

const add = async(productId) => {

let response = await axios.post("/api/products", {


    productId: productId
});

console.log('test from index');


return response.data.count;

}

const getCount = async() => {

    let response = await axios.post("/api/products/count");
    return response.data.count;



}


return {
    add,
    getCount,
}

}