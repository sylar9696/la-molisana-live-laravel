 <header>
        <img src=" {{ asset('images/marchio-sito-test.png') }} " alt="Logo" class="logo">
        <nav>
            <ul>
                <li>
                    <a href=" {{ url('/') }} ">Home</a>
                </li>
                <li>
                    <a href=" {{ route('prodotti') }} ">Prodotti</a>
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
