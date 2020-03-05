<div id="navbar" class="navbar navbar-default">
                                
                    <ul class="nav navbar-nav">
                        <li <?php if(@$_GET['a'] == 'menu_utama'){ echo "class='active'";}?>><a href="index.php">Menu Utama</a></li>
                        <li <?php if(@$_GET['a'] == 'buku'){ echo "class='active'";}?>><a href="?a=buku">Buku</a></li>
                        <li <?php if(@$_GET['a'] == 'peminjaman'){ echo "class='active'";}?>><a href="?a=peminjaman">Peminjaman</a></li>
                        <li <?php if(@$_GET['a'] == 'status'){ echo "class='active'";}?>><a href="?a=status">Status</a></li>
                    </ul>
                    
                    
                
            </div>