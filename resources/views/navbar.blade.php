<nav class="z-10 shadow-md navbar bg-base-100">
    <div class="flex-1">
        <a class="text-xl btn btn-ghost">Coding Challenge</a>
    </div>
    <div class="flex-none">
        <ul class="px-1 menu menu-horizontal">
            <li>
                <details>
                    <summary>Menu</summary>
                    <ul class="p-2 rounded-t-none bg-base-100">
                        <li>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit">Logout</button>
                            </form>
                        </li>
                    </ul>
                </details>
            </li>
        </ul>
    </div>
</nav>
