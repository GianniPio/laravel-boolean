<template>
    <div id="postcards">

        <table class="m-auto" border="1">
            <tr>
                <th>ID</th>
                <th>Sender</th>
                <th>Address</th>
                <th>Text</th>
                <th>Image</th>
            </tr>
            <tr v-for="postcard in postcards" :key="postcard.id">
                <td>{{postcard.id}}</td>
                <td>{{postcard.sender}}</td>
                <td>{{postcard.andress}}</td>
                <td>{{postcard.text}}</td>
                <td>
                    <img v-if="postcard.image" :src="'/storage/postcards/' +  postcard.image" :alt="postcard.image" width="100" class="m-2">
                    <p v-else>Null</p>
                </td>
            </tr>
        </table>




    </div>
</template>

<script>
export default {

    data() {

        return {

            postcards: []
        }

    },
    
    mounted() {

        axios.get('api/postacards/list')
            .then(r => this.postcards = r.data)
            .catch(e => console.error(e));

    }
}
</script>