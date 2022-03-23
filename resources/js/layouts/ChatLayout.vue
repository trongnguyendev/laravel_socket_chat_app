<template>
    <div class="flex w-full">
        <nav class="bg-white w-1/12">
            aaa
        </nav>

        <aside class="bg-gray-500 w-3/12">
            aaa 
        </aside>

        <div id="content" class="w-7/12 bg-blue-300">
            <UserIcon class="w-4" />
            aaa
        </div>

        <aside class="bg-white w-1/12">
            aaa
        </aside>
    </div>
</template>

<script>
import UserIcon from '../components/icons/User.vue'

export default {
    components: {
            UserIcon
        },
}
</script>