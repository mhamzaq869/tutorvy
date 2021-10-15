 <!-- sidenav on web view -->
 <nav id="sidebar">
     <div class="sidebar-header">
         <div class="logoImage">
             <a href="{{ route('tutor.dashboard')}}">
                 <img class="mt-2 mb-1 w-50 ml-5 mr-4" src="{{asset('assets/images/logo/logo.png') }}" alt="logoImage">
             </a>
         </div>
     </div>
     <!-- sidenav icons web view -->
     <div class="id-sideicons">
         <ol class="list-unstyled id-sideicons componentsX click-sideicon" style="display: none;" id="sidenav-show">
             <li id="btns-sideicons" class="btn @if(\Request::path() === 'tutor/dashboard') active @endif w-100">
                 <a href="#" data-toggle="" aria-expanded="false">
                     <img class="mr-2 dasborad-sid" src="{{asset('assets/images/ico/dash-ico.png') }}" alt="dasborad-ico">
                     <span class="dasborad-show mt-3">
                         Dashboard
                     </span>
                 </a>
             </li>
             <li class="btn mt-3 mt-3">
                 <a href="./Booking/BookingNo.html" aria-expanded="false">
                     <img class="mr-2 book-sid" src="{{asset('assets/images/ico/book-icons.png') }}" alt="book-ico">
                     <span class="book-show mt-3">
                         Bookings
                     </span>
                 </a>
             </li>
             <li class="btn mt-3">
                 <a href="./classroom/classroom.html">
                     <img class="class-sid mr-2" src="{{asset('assets/images/ico/class-ico.png') }}" alt="class-ico">
                     <span class="class-show mt-3">
                         Classroom
                     </span>
                 </a>
             </li>
             <li class="btn mt-3">
                 <a href="./Subjects/subject.html">
                     <img class="subject-sid mr-2" src="{{asset('assets/images/ico/subject-ico.png') }}" alt="subject-ico">
                     <span class="subject-show mt-3">
                         Subjects
                     </span>
                 </a>
             </li>
             <li class="btn mt-3">
                 <a href="./clander/clander.html">
                     <img class="calande-sid mr-2" src="{{asset('assets/images/ico/calender-ico.png') }}" alt="calender-ico">
                     <span class="calande-show mt-3">
                         Calendar
                     </span>
                 </a>
             </li>
             <li class="btn mt-3">
                 <a href="">
                     <img class="history-sid mr-2" src="{{asset('assets/images/ico/history-ico.png') }}" alt="history-ico">
                     <span class="history-show mt-3">
                         Support
                     </span>
                 </a>
             </li>
             <li class="btn mt-3">
                 <a href="./payment/payment.html">
                     <img class="payment-sid mr-2" src="{{asset('assets/images/ico/payment-ico.png') }}" alt="payment-ico">
                     <span class="payment-show mt-3">
                         Payment
                     </span>
                 </a>
             </li>
             <li class="btn mt-3">
                 <a href="./setting/setting.html">
                     <img class="setting-sid mr-2" src="{{asset('assets/images/ico/setting-ico.png') }}" alt="setting-ico">
                     <span class="setting-show mt-3">
                         Settings
                     </span>
                 </a>
             </li>
         </ol>
     </div>
     <!-- end -->
     <div class="scroll-nav">
         <ul class="list-unstyled componentsX" id="sidenav-hide">
             <li class="btn @if(\Request::path() === 'tutor/dashboard') active @endif  w-100 mt-3">
                 <a href="{{route('tutor.dashboard')}}" data-toggle="" aria-expanded="false">
                     <img src="{{asset('assets/images/ico/dash-ico.png') }}" alt="dasborad-ico" class=" mr-2">
                     Dashboard
                 </a>
             </li>
             <li class="btn @if(\Request::path() === 'tutor/booking') active @endif w-100">
                 <a href="{{route('tutor.booking')}}" aria-expanded="false" class="">
                     <img src="{{asset('assets/images/ico/book-icons.png') }}" alt="book-ico" class=" mr-2">
                     Bookings
                 </a>
             </li>
             <li class="btn @if(\Request::path() === 'tutor/classroom') active @endif w-100">
                 <a href="{{route('tutor.classroom')}}">
                     <img src="{{asset('assets/images/ico/class-ico.png') }}" alt="class-ico" class=" mr-2">
                     Classroom
                 </a>
             </li>
             <li class="btn @if(\Request::path() === 'tutor/couser') active @endif w-100">
                <a href="{{route('tutor.course')}}">
                    <img src="{{asset('assets/images/manage-icon.svg')}}" alt="class-ico" style="filter: invert(1)" class="mr-2">
                    Courses
                </a>
            </li>
             <li class="btn  @if(\Request::path() === 'tutor/subjects') active @endif w-100">
                 <a href="{{route('tutor.subject')}}">
                     <img src="{{asset('assets/images/ico/subject-ico.png') }}" alt="subject-ico" class=" mr-2">
                     Subjects
                 </a>
             </li>
             <!-- <li class="btn  @if(\Request::path() === 'tutor/reviews') active @endif w-100">
                 <a href="{{route('tutor.reviews')}}">
                     <img src="{{asset('assets/images/ico/subject-ico.png') }}" alt="subject-ico" class=" mr-2">
                     Reviews
                 </a>
             </li> -->
             <li class="btn @if(\Request::path() === 'tutor/calendar') active @endif w-100">
                 <a href="{{route('tutor.calendar')}}">
                     <img src="{{asset('assets/images/ico/calender-ico.png') }}" alt="calender-ico" class=" mr-2">
                     Calendar
                 </a>
             </li>
             <li class="btn @if(\Request::path() === 'tutor/history') active @endif w-100">
                 <a href="{{route('tutor.history')}}">
                     <img src="{{asset('assets/images/ico/history-ico.png') }}" alt="history-ico" class=" mr-2">
                     Support
                 </a>
             </li>
             <li class="btn @if(\Request::path() === 'tutor/payment') active @endif w-100">
                 <a href="{{route('tutor.payment')}}">
                     <img src="{{asset('assets/images/ico/payment-ico.png') }}" alt="payment-ico" class=" mr-2">
                     Payment
                 </a>
             </li>
             <li class="btn @if(\Request::path() === 'tutor/settings') active @endif w-100">
                 <a href="{{route('tutor.settings')}}">
                     <img src="{{asset('assets/images/ico/setting-ico.png') }}" alt="setting-ico" class=" mr-2">
                     Settings
                 </a>
             </li>
         </ul>

         <!--  sideanv bottom support -->
         <div class="container-fluid">
            <a href="#" data-toggle="modal" data-target="#supportModal" style="text-decoration:none;">
                <div class="imageside text-center">

                    <img src="{{asset('assets/images/backgrounds/man.svg') }}" alt="background-image">
                    <div class="support">
                        <div class="text-side text-left">
                            <p class="ml-2 mr-2 mt-2 pt-3 pt-2 support-text">
                                Support
                            </p>
                            <p class="ml-2 mr-2 support-text1">
                                Contact 24/7 if you need only support
                            </p>
                            <p class="ml-2 mr-2 support-text2">
                                LEARN MORE &nbsp;
                                <img src="{{asset('assets/images/ico/arrow-left.png')}}" alt="left-arrow-ico">
                            </p>
                        </div>
                    </div>
                </div>
             </a>
         </div>
     </div>


     <!-- end -->
 </nav>
 <!-- nav -->
