<aside>
    <div class="flex-start">
      @auth
        <h3>{{ ucfirst(__('categories')) }}</h3>
        <ul>
          @foreach ($categories as $category)
              <li class="{{ $current_category->id == $category->id ? 'active' : ''}}">
                <a href="{{ route('category.index', $category->slug) }}">
                  {{ $category->name }}
                </a>
              </li>
          @endforeach
        </ul>
      @endauth
    </div>
    <div class="flex-end">
      <h3>{{ ucfirst(__('theme')) }}</h3>
      <select id="theme-switcher">

      </select>
    </div>
  </aside>