<template>
    <div class="reqister_page">
        <p>name</p>
        <input v-model="registerData.full_name"/>
        <p>name</p>
        <input v-model="registerData.email"/>
        <p>name</p>
        <input/>
    </div>
</template>

<script lang="ts">
import { defineComponent, reactive } from 'vue'

export default defineComponent({
    name: 'RegisterPage',
    setup(){
        const registerData = reactive({
            full_name: '',
            email: '',
        })

        return {
            registerData
        }
    }
})
</script>

<style scoped>
    .reqister_page {
        overflow-x: hidden;
        transition: all ease-in-out 0.3s;
        background: rgb(150,60,165);
        background: linear-gradient(0deg, rgba(150,60,165,1) 0%, rgba(114,161,215,1) 100%);
        position: absolute;
        top: 0;
        height: 100vh;
        width:100%;
        right: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    input {
        margin: 10px;
    }
</style>
