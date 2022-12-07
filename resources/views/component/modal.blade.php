@if (session('general-status'))
    <div class="fixed top-28 rounded bg-white shadow flex items-center justify-center p-12 z-50 left-1/2 -translate-x-1/2 w-[clamp(12em,40vw,40em)]"
        id="message-toaster">
        <i class="absolute top-4 right-4 font-black text-gray-500 cursor-pointer"
            style="font-variant: small-caps;">close</i>
        <span class="text-center text-green-300 capitalize">{{ session('general-status') }}</span>
    </div>
    <script>
        const script = document.getElementById('message-toaster');
        const cls = script.querySelector('i');
        cls.onclick = () => script.remove();
    </script>
@endif
