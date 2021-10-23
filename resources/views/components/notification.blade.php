@if ($msg = Session::get('success'))
    <div class="alert-toast mt-3 mr-4 absolute right-0 md:w-full max-w-xs">
        <input type="checkbox" class="hidden" id="footertoast">
        <label class="close cursor-pointer flex justify-between p-3 bg-green-500 h-20 rounded-xl shadow-xl text-white font-bold" for="footertoast">
            {{ $msg }}
        <svg class="mt-1 fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 18 18">
            <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
        </svg>
        </label>
    </div>
@endif

<style>
    /*Toast open/load animation*/
    .alert-toast {
        -webkit-animation: slide-in-right 0.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
                animation: slide-in-right 0.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
    }
    /*Toast close animation*/
    .alert-toast input:checked ~ * {
        -webkit-animation: fade-out-right 0.7s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
                animation: fade-out-right 0.7s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
    }
    /* -------------------------------------------------------------
    * Animations generated using Animista * w: http://animista.net, 
    * ---------------------------------------------------------- */
    @-webkit-keyframes slide-in-top{0%{-webkit-transform:translateY(-1000px);transform:translateY(-1000px);opacity:0}100%{-webkit-transform:translateY(0);transform:translateY(0);opacity:1}}@keyframes slide-in-top{0%{-webkit-transform:translateY(-1000px);transform:translateY(-1000px);opacity:0}100%
    {-webkit-transform:translateY(0);transform:translateY(0);opacity:1}}@-webkit-keyframes slide-out-top{0%{-webkit-transform:translateY(0);transform:translateY(0);opacity:1}100%{-webkit-transform:translateY(-1000px);transform:translateY(-1000px);opacity:0}}@keyframes slide-out-top{0%
        {-webkit-transform:translateY(0);transform:translateY(0);opacity:1}100%{-webkit-transform:translateY(-1000px);transform:translateY(-1000px);opacity:0}}@-webkit-keyframes slide-in-bottom{0%{-webkit-transform:translateY(1000px);transform:translateY(1000px);opacity:0}100%
        {-webkit-transform:translateY(0);transform:translateY(0);opacity:1}}@keyframes slide-in-bottom{0%{-webkit-transform:translateY(1000px);transform:translateY(1000px);opacity:0}100%{-webkit-transform:translateY(0);transform:translateY(0);opacity:1}}@-webkit-keyframes slide-out-bottom{0%
            {-webkit-transform:translateY(0);transform:translateY(0);opacity:1}100%{-webkit-transform:translateY(1000px);transform:translateY(1000px);opacity:0}}@keyframes slide-out-bottom{0%{-webkit-transform:translateY(0);transform:translateY(0);opacity:1}100%{-webkit-transform:translateY(1000px);
                transform:translateY(1000px);opacity:0}}@-webkit-keyframes slide-in-right{0%{-webkit-transform:translateX(1000px);transform:translateX(1000px);opacity:0}100%{-webkit-transform:translateX(0);transform:translateX(0);opacity:1}}@keyframes slide-in-right{0%{-webkit-transform:translateX(1000px);
                    transform:translateX(1000px);opacity:0}100%{-webkit-transform:translateX(0);transform:translateX(0);opacity:1}}@-webkit-keyframes fade-out-right{0%{-webkit-transform:translateX(0);transform:translateX(0);opacity:1}100%{-webkit-transform:translateX(50px);transform:translateX(50px);opacity:0}}
                    @keyframes fade-out-right{0%{-webkit-transform:translateX(0);transform:translateX(0);opacity:1}100%{-webkit-transform:translateX(50px);transform:translateX(50px);opacity:0}}
</style>