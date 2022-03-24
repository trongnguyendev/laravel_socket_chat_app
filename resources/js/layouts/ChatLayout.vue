<template>
    <div class="flex w-full fixed h-full divide-x-[1px]">
        <aside class="bg-white flex divide-x-[1px]">
            <nav class="bg-white w-24 divide-y">
                <div class="p-4">
                    <img src="images/logo.png" alt="" class="w-9 m-auto">
                </div>
                <div class="p-4 flex flex-row justify-center">
                    <div class="avatar">
                        <div class="w-11 mask mask-hexagon ring ring-primary ring-offset-base-100 ring-offset-2">
                            <img src="https://api.lorem.space/image/face?hash=55350" />
                        </div>
                    </div>
                </div>
            </nav>
            <div class="aside-main p-4 w-[300px]">
                <div>
                    <h2 class="text-2xl font-bold">Chats</h2>
                    <p class="text-sm">Chat form your friends</p>

                    <input type="text" placeholder="Search message" class="input input-bordered w-full max-w-xs input-sm mt-2 mb-2">
                </div>
            </div>

        </aside>

        <div id="content" class="w-full bg-[#eff7fe] relative">

            <div class="absolute w-full left-0 top-0 p-4">
                <div class="bg-white h-20 p-4">
                    <div class="avatar online">
                        <div class="w-11 rounded-full">
                            <img src="https://api.lorem.space/image/face?hash=28212" />
                        </div>
                    </div>
                </div>
            </div>

            <div class="overflow-auto w-full h-full">
                <div class="h-[2000px]">
                </div>
            </div>

            <div class="absolute bottom-0 left-0 w-full h-20 bg-white">

            </div>
        </div>

        <aside class="bg-white w-1/12 p-4">
            aside right
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