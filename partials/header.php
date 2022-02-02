
<header>
    <div class="header-container">
        <img src="http://<?php echo $_SERVER['HTTP_HOST'] ?>/php-ajax-dischi/img/17-176153_download-logo-spotify-png.png" alt="">
        <select @change="call()" name="genre" id="genre" v-model="myGenre">
            <option value="all">All</option>
            <option value="rock">Rock</option>
            <option value="pop">Pop</option>
            <option value="metal">Metal</option>
        </select>
    </div>

</header>