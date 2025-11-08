		<?php $nm = $this->session->userdata('username'); ?>
        <div>
            <div style="background: #c4e1efff; padding:10px; border-top: 2px solid #b3e0ff;">
                **Selamat Datang <strong><?php echo htmlspecialchars($nm); ?></strong> !** 
            </div>
            <nav style="background: #e6f7ff; padding: 15px; border-bottom: 2px solid #b3e0ff;">
                <a href="<?= site_url('apps/home')?>">Home</a> |
                <a href="<?= site_url('apps/berita')?>">Berita</a> |
                <a href="<?= site_url('auth/logout')?>">Logout</a> 
            </nav>
		</div>