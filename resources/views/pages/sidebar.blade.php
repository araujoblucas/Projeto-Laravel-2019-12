<div class="sidebar">
   <div class="sidebarAdmin">
		<img src="img/profile.jpg" class="sidebarImg" />
		<p>
			Bem vindo,
		</p>
		<p>
			{{ auth()->user()->name }}
        </p>
        <p>
			<a class="sidebarLogout" href="{{ route('logout') }}">Sair</a>
		</p>
   </div>

    <a href="
    {{ (Route::current()->getName() == 'admin_config') ? '#' : route('admin_config') }}"
    class="button
    {{ Route::current()->getName() == 'admin_config' ? "active" : ''}}"
    >
        Padrão
    </a>

   <a href="
    {{ Route::current()->getName() == 'admin_home' ? '#' : route('admin_home') }}"
    class="button
    {{ Route::current()->getName() == 'admin_home' ? "active" : ''}}
    "
    >
        Home
    </a>
   <a href="{{(Route::current()->getName() == 'admin_about_team') ? '#' : route('admin_about_team') }}"
      class="button
      {{ (Route::current()->getName() == 'admin_about_team') ? "active" : ''}}"
   >
        Equipe
   </a>
   <a href="{{(Route::current()->getName() == 'admin_about_us') ? '#' : route('admin_about_us') }}"
   class="button
   {{ (Route::current()->getName() == 'admin_about_us') ? "active" : ''}}"
   >
       Sobre Nós
    </a>
   <a href="{{(Route::current()->getName() == 'admin_gallery') ? '#' : route('admin_gallery') }}"
      class="button
      {{ (Route::current()->getName() == 'admin_gallery') ? "active" : ''}}"

    >
       Galeria
    </a>
   <a href="{{(Route::current()->getName() == 'admin_price_table') ? '#' : route('admin_price_table') }}"
      class="button
      {{ (Route::current()->getName() == 'admin_price_table') ? "active" : ''}}"
   >
        Planos
    </a>
    <a href="{{(Route::current()->getName() == 'admin_contact') ? '#' : route('admin_contact') }}"
        class="button
        {{ (Route::current()->getName() == 'admin_contact') ? "active" : ''}}"
      >
       Contato
    </a>
    <div class="dropdownBTN">
        <a href="#" class="button">Posts</a>
            <ul class="buttonUL">
                <li><a href="#">Adicionar</a></li>
                <li><a href="#">Listar</a></li>
            </ul>
    </div>
    <div class="dropdownBTN">
        <a href="#" class="button">Parceiros</a>
            <ul class="buttonUL">
                <li><a href="#">Adicionar</a></li>
                <li><a href="#">Listar</a></li>
            </ul>
    </div>
</div >

