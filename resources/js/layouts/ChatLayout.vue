<template>
    <div class="flex w-full fixed h-full divide-x-[1px]">

        <!-- sidebar left -->
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

        <!-- main -->
        <div id="content" class="w-full bg-[#eff7fe] relative">

            <div class="absolute w-full left-0 top-0 p-4 z-10 bg-[#eff7fe]">
                <div class="bg-white h-20 p-4 flex justify-between items-center rounded-sm shadow-sm">
                    <!-- avarta -->
                    <div class="flex gap-4">
                        <div class="avatar online">
                            <div class="w-11 rounded-full">
                                <img src="https://api.lorem.space/image/face?hash=28212" />
                            </div>
                        </div>
                        <div>
                            <h3>Josephin water</h3>
                            <div class="badge badge-success gap-2 text-white badge-sm">
                                Active
                            </div>
                        </div>
                    </div>

                    <div class="option flex gap-6">
                        <SearchIcon class="w-6 text-gray-600 cursor-pointer" />
                        <PhoneIcon class="w-5 text-gray-600 font-bold cursor-pointer" />
                        <CameraIcon class="w-6 text-gray-600 cursor-pointer" />
                        <CircleIcon class="w-5 text-gray-400 opacity-60 cursor-pointer" />
                    </div>
                </div>
            </div>

            <div class="overflow-auto w-full h-full">
                <div class="flex w-full- h-full">
                    <div class="list-message p-4 mt-auto w-full pb-16">
                        <div class="flex gap-4 items-start mb-5 gap-y-12" v-for="(message, index) in messages" :key="index" :class="message.type ? 'message' : 'message_me'">
                            <div class="avatar mt-1">
                                <div class="rounded-full w-11">
                                    <img :src="message.avarta" />
                                    
                                </div>
                            </div>
                            <div>
                                <h3 class="mb-1">Alan josheph <span class="text-xs text-gray-500 ml-3">01:04 AM</span></h3>
                                <div class="message_content text-base p-4 rounded-3xl">{{message.content}}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="absolute bottom-0 left-0 w-full bg-white flex items-center p-4 gap-4">
                <PlusCircleIcon class="w-10 cursor-pointer" />
                <PaperClipIcon class="w-5 cursor-pointer" />
                <EmojiHappyIcon class="w-5 cursor-pointer" />                
                <input type="text" placeholder="Write your message..." class="input input-ghost w-full w-full bg-opacity-20 rounded-xl bg-gray-400 h-8 focus:outline-none focus:bg-opacity-20 px-2 py-4">
                <PaperPlaneIcon class="w-5 cursor-pointer text-primary" />
            </div>
        </div>

        <!-- sidebar right -->
        <aside class="bg-white w-1/12 p-4">
            aside right
        </aside>
    </div>
</template>

<script>
import UserIcon from '../components/icons/User.vue'
import PhoneIcon from '../components/icons/Phone.vue'
import CameraIcon from '../components/icons/Camera.vue'
import CircleIcon from '../components/icons/CircleInfo.vue'
import SearchIcon from '../components/icons/Search.vue'
import PaperClipIcon from '../components/icons/PaperClip.vue'
import EmojiHappyIcon from '../components/icons/EmojiHappy.vue'
import PlusCircleIcon from '../components/icons/PlusCircle.vue'
import PaperPlaneIcon from '../components/icons/PaperPlane.vue'

export default {
    components: {
            UserIcon,
            PhoneIcon,
            CameraIcon,
            CircleIcon,
            SearchIcon,
            PaperClipIcon,
            EmojiHappyIcon,
            PlusCircleIcon,
            PaperPlaneIcon
    },
    data() {
        return {
            messages: [
                { type: 1, avarta: 'https://api.lorem.space/image/face?hash=28212', content: 'Yeah everything is fine' },
                { type: 1, avarta: 'https://api.lorem.space/image/face?hash=28212', content: '& Next meeting tomorrow 10.00AM' },
                { type: 0, avarta: 'https://api.lorem.space/image/face?hash=55350', content: 'Good morning, How are you? What about our next meeting?' },
                { type: 0, avarta: 'https://api.lorem.space/image/face?hash=55350', content: 'Good morning' },
                { type: 1, avarta: 'https://api.lorem.space/image/face?hash=28212', content: 'Wow thats great' },
                { type: 1, avarta: 'https://api.lorem.space/image/face?hash=28212', content: 'đi suối nên mụi ng đem đồ theo tắm đc nha' },
                { type: 0, avarta: 'https://api.lorem.space/image/face?hash=55350', content: 'Ủa tắm mà cũng ép' },
                { type: 1, avarta: 'https://api.lorem.space/image/face?hash=28212', content: 'Thường tắm tui ko có mặc đồ bạn' },
                { type: 0, avarta: 'https://api.lorem.space/image/face?hash=55350', content: 'Chơi vậy rồi ai dám chơi lại anh ' },
                { type: 0, avarta: 'https://api.lorem.space/image/face?hash=55350', content: 'Hi mn.. Mình là mem mới.. Mong các bạn nhẹ nhàng tay ga cho mình theo với nhé!' },
                { type: 1, avarta: 'https://api.lorem.space/image/face?hash=28212', content: 'Lớn rồi nha mậy.. dạo này t hay cọc lắm á.. múc m giờ :))))' },
                { type: 1, avarta: 'https://api.lorem.space/image/face?hash=28212', content: 'Vậy đổi giờ tập trung đi @Nguyễn Đức Trường Giang 9h30 đi..' },

            ]
        }
    }
}
</script>