 <header>
     <img src=" {{ asset('images/marchio-sito-test.png') }} " alt="Logo" class="logo">
     <nav>
         <ul>
             <li>
                 <a
                 class=" {{ Request::route()->getName() == 'home' ? 'active' : '' }} "
                 href=" {{ url('/') }} ">Home</a>
             </li>
             <li>
                 <a
                 class=" {{ Request::route()->getName() == 'prodotti' || Request::route()->getName() == 'prodotto' ? 'active' : '' }} "
                 href=" {{ route('prodotti') }} ">Prodotti</a>
             </li>
             <li>
                 <a href="#">Chi siamo</a>
             </li>
             <li>
                 <a href="#">Contatti</a>
             </li>
         </ul>
     </nav>
 </header>
