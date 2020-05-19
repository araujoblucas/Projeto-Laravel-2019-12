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
   <a href="#" class="button">Sobre Nós</a>
   <a href="{{(Route::current()->getName() == 'admin_gallery') ? '#' : route('admin_gallery') }}"
      class="button
      {{ (Route::current()->getName() == 'admin_gallery') ? "active" : ''}}"

    >
       Galeria
    </a>
   <a href="#" class="button">Planos</a>
    <a href="{{(Route::current()->getName() == 'admin_contact') ? '#' : route('admin_contact') }}"
        class="button
        {{ (Route::current()->getName() == 'admin_contact') ? "active" : ''}}"
      >
       Contato
    </a>
   <a href="#" class="button">Posts</a>
   <a href="#" class="button">Parceiros</a>
</div >

