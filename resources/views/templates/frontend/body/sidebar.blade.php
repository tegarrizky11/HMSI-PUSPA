<!-- canvas menu -->
<div class="canvas-menu d-flex align-items-end flex-column">
    <!-- close button -->
    <button type="button" class="btn-close" aria-label="Close"></button>

    <!-- logo -->
    <div class="logo">
        <h3>Karmapack</h3>
    </div>

    <!-- menu -->
    <nav>
        {!! navbar_menu_front($page_attr_navigation) !!}
    </nav>


    <!-- social icons -->
    <ul class="social-icons list-unstyled list-inline mb-0 mt-auto w-100">
        @foreach ($list_sosmed as $sosmed)
            <li class="list-inline-item">
                <a href="{{ $sosmed['url'] }}" title="{{ $sosmed['nama'] }}" target="_blank">
                    <i class="{{ $sosmed['icon'] }}"></i>
                </a>
            </li>
        @endforeach
    </ul>
</div>
