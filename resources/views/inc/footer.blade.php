<footer class="bg-light text-center text-lg-start">
    <!-- Copyright -->
    <div class="text-center p-3 col-md-12">
            <h5>© 2021</h5>
        @auth
        @if(auth()->user()->status == 'guest')
    <a href="/review">Palikti atsiliepimą</a>
        @endif
            @endauth
    </div>
    <!-- Copyright -->
</footer>
