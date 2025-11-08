	<head>
		<title>Berita</title>
	</head>
		<!--menu-->

		<!--Berita-->
			<h2>Halaman Berita</h2>
			
			<?php if (!empty($news)): ?>
				<ul>
					<?php foreach($news as $item): ?>
						<li style="margin-bottom: 10px; border-bottom: 1px dotted #ccc; padding-bottom: 5px;">
							<strong><?php echo htmlspecialchars($item['judul']) ?></strong>
							<small>(Tanggal: <?php echo htmlspecialchars($item['tanggal']) ?> )</small>
						</li>
					<?php endforeach; ?>
				</ul>
			<?php else: ?>
				<p>Tidak ada berita yang tersedia saat ini.</p>
			<?php endif; ?>