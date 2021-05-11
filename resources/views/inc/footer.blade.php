<footer class="bg-light text-center text-lg-start">
    <!-- Copyright -->
    <div class="text-center p-3 col-md-12"  style="background-color: #eff9fa">
            <h5>© 2021</h5>
        @auth
        @if(auth()->user()->status == 'guest' && auth()->user()->banned == 0)
    <a href="/review">Palikti atsiliepimą</a>
        @endif
            @endauth
    </div>
    <!-- Copyright -->
</footer>
