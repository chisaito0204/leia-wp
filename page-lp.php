<?php
/*
Template Name: LP
*/
get_header();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<div class="lp">
			<figure class="lp__mv lg-only">
				<img src="<?php echo esc_url(get_theme_file_uri('/assets/img/lp/mv.jpg')); ?>" alt="" width="1440" height="764" />
			</figure>
			<figure class="lp__mv sm-only">
				<img src="<?php echo esc_url(get_theme_file_uri('/assets/img/lp/sp/mv.jpg')); ?>" alt="" width="390" height="680" />
			</figure>

			<div class="lp__box">
				<h2 class="lp__title">Leia Dance Studio</h2>
				<p class="lp__txt01">体験レッスン・見学受付中!!</p>
				<p class="lp__txt02">初心者大歓迎!!</p>
				<p class="lp__txt03">体験レッスン：<span class="t1 pink">￥</span><span class="t2 pink">2,200</span><span class="t3 pink">円</span><span class="t4 pink">（税込）</span></p>
				<div class="lp__txtbox">
					<p class="lp__txt04"><span class="t1">火曜日： </span><span class="t2">田園調布スタジオ</span> <span class="t3">11:20 ~ 12:40 / <br class="sm-only" /></span><span class="t2 pl">田園調布スタジオ</span> <span class="t3">19:20 ~ 20:40</span></p>
					<p class="lp__txt04"><span class="t1">金曜日： </span><span class="t2">自由が丘スタジオ</span> <span class="t3">19:20 ~ 20:40</span></p>
					<p class="lp__txt04"><span class="t1">日曜日： </span><span class="t2">田園調布スタジオ</span> <span class="t3">14:20 ~ 15:40</span></p>
				</div>

				<a href="#form" class="lp__btn">お申し込みはこちらから</a>

				<p class="lp__textarea">
					<!-- プロに振付けや指導してより洗練されたダンスを<br class="sm-only" />身に付けたい個人の方、サークルの皆様。<br />
					お子様の情操教育と学びの場に、<br class="sm-only" />ジュニアや親子ペアで学ぶクラス。<br />
					横浜でのスタジオ開講も含めて検討しております。<br />
					ぜひお問い合わせよりご意見、<br class="sm-only" />ご要望お待ちしております！ -->

					懐かしい名曲にのせて、<br class="sm-only">華やかなショーダンスを楽しく体験してみませんか？<br>
					自由が丘駅・田園調布駅から徒歩5分の好アクセス！<br>
					未経験の方やシニアの方も安心して始められます。<br>
					姿勢改善や健康づくり、美しい所作にも効果的。<br>
					ブロードウェイスタイルの本格ジャズダンスを、<br class="sm-only">受賞歴豊富な講師が丁寧に指導。<br>
					まずは体験から。日常にちょっとした刺激と、<br class="sm-only">踊る楽しさを取り入れてみませんか？
				</p>

				<figure class="lp__boxBg">
					<img src="<?php echo esc_url(get_theme_file_uri('/assets/img/lp/bg.png')); ?>" alt="" width="402" height="805" />
				</figure>
			</div>

			<p class="lp__teacher">〜 講師・河野麻耶からのメッセージ 〜</p>
			<div class="teacher__messasge">
				<p class="teacher__messasge--txt">
					Leia Dance Studio では、レベル分けがない分、レッスンでは毎回生徒さんに合わて丁寧に指導いたします。未経験者でも大丈夫です！<br />
					ミュージカルダンス、フラダンスなど多様なダンススタイルを取り入れてるのも特徴です。楽しく踊りながら美しい姿勢と凛とした所作も身に付けましょう！スタジオでお会いできるのを楽しみにしております！
					<span class="teacher__messasge--dec">message</span>
				</p>
				<figure class="teacher__messasge--img"><img src="<?php echo esc_url(get_theme_file_uri('/assets/img/lp/maya-face.png')); ?>" alt="河野麻耶" width="298" height="298" /></figure>
			</div>

			<div class="lp__pose">
				<p class="lp__pose--txt">激しく踊らなくても大丈夫です！<br />綺麗な所作と姿勢をダンスで手に入れましょう！</p>
				<div class="lp__pose__img">
					<figure>
						<img src="<?php echo esc_url(get_theme_file_uri('/assets/img/lp/pose02.png')); ?>" alt="" width="447" height="412" />
					</figure>
					<figure>
						<img src="<?php echo esc_url(get_theme_file_uri('/assets/img/lp/pose03.jpg')); ?>" alt="" width="447" height="412" />
					</figure>
				</div>
			</div>

			<div class="lp__infobox">
				<p class="lp__ttl">タイムテーブル</p>

				<div class="top__lesson__schedule">
					<div class="top__lesson__scheduleInner lg-only">
						<table>
							<tbody>
								<tr>
									<th>月曜日</th>
									<th>火曜日</th>
									<th>水曜日</th>
									<th>木曜日</th>
									<th>金曜日</th>
									<th>土曜日</th>
									<th>日曜日</th>
								</tr>
								<tr class="noon">
									<td></td>
									<td class="active">田園調布スタジオ<br />11:20-12:40</td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td class="active">田園調布スタジオ<br />14:20-15:40</td>
								</tr>
								<tr class="night">
									<td></td>
									<td class="active">田園調布スタジオ<br />19:20-20:40</td>
									<td></td>
									<td></td>
									<td class="active">自由が丘スタジオ<br />19:20-20:40</td>
									<td></td>
									<td></td>
								</tr>
							</tbody>
						</table>
					</div>

					<div class="top__lesson__scheduleSp sm-only">
						<dl class="week">
							<dt class="week__ttl">月曜日</dt>
							<dd class="week__desc"></dd>
							<dd class="week__desc"></dd>
						</dl>
						<dl class="week">
							<dt class="week__ttl">火曜日</dt>
							<dd class="week__desc on">田園調布スタジオ<strong>：11:20-12:40</strong></dd>
							<dd class="week__desc on">田園調布スタジオ<strong>：19:20-20:40</strong></dd>
						</dl>
						<dl class="week">
							<dt class="week__ttl">水曜日</dt>
							<dd class="week__desc"></dd>
							<dd class="week__desc"></dd>
						</dl>
						<dl class="week">
							<dt class="week__ttl">木曜日</dt>
							<dd class="week__desc"></dd>
							<dd class="week__desc"></dd>
						</dl>
						<dl class="week">
							<dt class="week__ttl">金曜日</dt>
							<dd class="week__desc"></dd>
							<dd class="week__desc on">自由が丘スタジオ<strong>：19:20-20:40</strong></dd>
						</dl>
						<dl class="week">
							<dt class="week__ttl">土曜日</dt>
							<dd class="week__desc"></dd>
							<dd class="week__desc"></dd>
						</dl>
						<dl class="week">
							<dt class="week__ttl">日曜日</dt>
							<dd class="week__desc on">田園調布スタジオ<strong>：14:20-15:40</strong></dd>
							<dd class="week__desc"></dd>
						</dl>
					</div>
				</div>

				<div class="top__lesson__flow">
					<p class="top__lesson__flow--txt">レッスンは１コマ<span class="pink">80分間</span>。80分のレッスンは大きく3つのパートになっています。</p>

					<div class="top__lesson__flow--box">
						<figure class="top__lesson__flow--boxImg">
							<img src="<?php echo esc_url(get_theme_file_uri('/assets/img/top/lesson-flow01.jpg')); ?>" alt="" width="261" height="173" />
						</figure>
						<p class="top__lesson__flow--boxTxt">
							<span>①エクササイズとストレッチ</span><br />
							いきなり踊って怪我をしないため、そして、美しい体づくりには欠かせません。エクササイズは、本場米国プロ直伝のスタイルをベースにしています。慣れないうちは難しい動きもあるかもしれませんが、心配はいりません。講師のお手本を見ながら、丁寧な指導のもとで繰り返し練習することで、自然と身についていきます。ヒップアップ効果のある動きも取り入れてます。クラッシックバレエの基本であるバーレッスンもこのパートで行うときがあります。
						</p>
					</div>
					<div class="top__lesson__flow--box">
						<figure class="top__lesson__flow--boxImg">
							<img src="<?php echo esc_url(get_theme_file_uri('/assets/img/top/lesson-flow02.jpg')); ?>" alt="" width="261" height="173" />
						</figure>
						<p class="top__lesson__flow--boxTxt">
							<span>②ステップ、ジャンプ、基本など（クロスフロア）</span><br />
							当日の作品に出てくるステップや基本の動きなどを先に練習します。その他、ジャズダンスに必要な基本もこのパートで行います。ジャンプの基本やピルエット（ターン）の練習なども行います。
						</p>
					</div>
					<div class="top__lesson__flow--box">
						<figure class="top__lesson__flow--boxImg">
							<img src="<?php echo esc_url(get_theme_file_uri('/assets/img/top/lesson-flow03.jpg')); ?>" alt="" width="261" height="173" />
						</figure>
						<p class="top__lesson__flow--boxTxt">
							<span>③作品を踊る</span><br />
							いきなり音楽に合わせるのではなく、カウントで振付します。その後、音楽に合わせて踊っていきます。初心者の方には無理ない範囲での振付にしたり、経験者には更にレベルアップとなるような振付けを行うなど臨機応変に対応いたします。分からないときには、随時質問して頂いて大丈夫です。なお各教材のワンポイントレッスン（初心者向け、経験者向け）をメルマガ（登録は<a href="/#mailmaga">こちら→</a>）でも配信しています。
						</p>
					</div>
				</div>

				<div class="lp__gallery">
					<figure class="lp__gallery--img01">
						<img src="<?php echo esc_url(get_theme_file_uri('/assets/img/lp/jazz01.jpg')); ?>" alt="" width="516" height="781" />
					</figure>
					<div>
						<figure class="lp__gallery--img02">
							<img src="<?php echo esc_url(get_theme_file_uri('/assets/img/lp/jazz02.jpg')); ?>" alt="" width="470" height="470" />
						</figure>
						<figure class="lp__gallery--img03">
							<img src="<?php echo esc_url(get_theme_file_uri('/assets/img/lp/jazz03.jpg')); ?>" alt="" width="470" height="288" />
						</figure>
					</div>
				</div>

				<p class="lp__ttl">アクセス</p>
				<div class="top__lesson__access">
					<p class="top__lesson__access--text">
						田園調布と自由が丘の２つのスタジオでレッスンを開講しています。<br />
						どちらも駅徒歩5分程度と都心の便利な2拠点です。ライフスタイルに合わせてジャズダンスを楽しみましょう。
					</p>
					<p class="top__lesson__access--ttl">田園調布スタジオ</p>
					<p class="top__lesson__access--txt">
						<span class="fsl">田園調布駅徒歩<span class="pink">5分</span>！</span>
						<br />天井高も高く、リノリウム張りの本格的なスタジオで伸び伸びと踊れます！<br />
						<br />
						<span class="indent01">・東急東横線田園調布駅 徒歩5分</span>
						<span class="indent01">・住所：〒145-0071 東京都大田区田園調布２丁目４６−３ ライトハウス田園調布 1F</span>
						<span class="indent01">・着替えスペースあり。駅からの途中にコンビニあり。</span>
					</p>
					<figure class="mapImg">
						<img src="<?php echo esc_url(get_theme_file_uri('/assets/img/top/map.jpg')); ?>" alt="田園調布スタジオマップ" width="945" height="415" />
					</figure>
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11264.121445656969!2d139.6649930469027!3d35.59901199139514!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018f5958aafb94d%3A0xab240d3190766c30!2zTGVpYSBEYW5jZSBTdHVkaW8g55Sw5ZyS6Kq_5biD44K544K_44K444Kq!5e0!3m2!1sja!2sjp!4v1730110689039!5m2!1sja!2sjp" width="1080" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
				<div class="top__lesson__access--box">
					<figure class="studioImg">
						<img src="<?php echo esc_url(get_theme_file_uri('/assets/img/top/access01.png')); ?>" alt="田園調布スタジオ写真" width="550" height="380" />
					</figure>
					<figure class="studioImg">
						<img src="<?php echo esc_url(get_theme_file_uri('/assets/img/top/access02.png')); ?>" alt="田園調布スタジオ写真" width="550" height="380" />
					</figure>
					<figure class="studioImg">
						<img src="<?php echo esc_url(get_theme_file_uri('/assets/img/top/studio05.jpg')); ?>" alt="田園調布スタジオ写真" width="550" height="380" />
					</figure>
					<figure class="studioImg">
						<img src="<?php echo esc_url(get_theme_file_uri('/assets/img/top/studio06.jpg')); ?>" alt="田園調布スタジオ写真" width="550" height="380" />
					</figure>
				</div>
				<p class="top__lesson__access--note02">写真引用：<a href="https://rental.studiocroix.jp/" target="_blank">スタジオクロア</a>様</p>


				<div class="top__lesson__access">
					<p class="top__lesson__access--ttl">自由が丘スタジオ</p>
					<p class="top__lesson__access--txt">
						<span class="fsl">自由が丘駅徒歩<span class="pink">5分</span>！</span>
						<br />会社帰りに、買い物ついでに、便利なロケーションです。<br />
						<br />
						<span class="indent01">・東急東横線／大井町線 自由が丘駅 徒歩5分</span>
						<span class="indent01">・住所：東京都目黒区自由が丘1-3-22 自由ヶ丘ダンススタジオ内</span>
						<span class="indent01">・着替えスペースあり。近所にコンビニあり。スタジオの電話連絡先はございません。</span>
					</p>
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2898.6031322731833!2d139.66810364800756!3d35.60875517766585!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018f5e150067731%3A0xc67dae953be8382e!2sLeia%20Dance%20Studio!5e0!3m2!1sja!2sjp!4v1720500231626!5m2!1sja!2sjp" width="1080" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
				<p class="top__lesson__access--note">★正面玄関はこちらです</p>
				<div class="top__lesson__access--box">
					<figure class="studioImg">
						<img src="<?php echo esc_url(get_theme_file_uri('/assets/img/top/studio01.jpg')); ?>" alt="自由が丘スタジオ写真" width="550" height="380" />
					</figure>
					<figure class="studioImg">
						<img src="<?php echo esc_url(get_theme_file_uri('/assets/img/top/studio02.jpg')); ?>" alt="自由が丘スタジオ写真" width="550" height="380" />
					</figure>
					<figure class="studioImg">
						<img src="<?php echo esc_url(get_theme_file_uri('/assets/img/top/studio03.jpg')); ?>" alt="自由が丘スタジオ写真" width="550" height="380" />
					</figure>
					<figure class="studioImg">
						<img src="<?php echo esc_url(get_theme_file_uri('/assets/img/top/studio04.jpg')); ?>" alt="自由が丘スタジオ写真" width="550" height="380" />
					</figure>
				</div>
			</div>

			<section class="top__voice">
				<div class="top__voice__box">
					<figure><img src="<?php echo esc_url(get_theme_file_uri('/assets/img/top/woman01.svg')); ?>" alt="" width="150" height="150" /></figure>
					<p class="top__voice__box--txt">
						Leia Dance Studioはジャズダンスだけではなく、クラシックバレエ・スパニッシュ・ハワイアン・モダンなど様々な要素を取り入れた曲を踊ることができますよ！<br />
						今からプロは目指せないけど思いっきり踊りたい、昔踊った経験があり再び始めたい、子どもと一緒に踊りたいなど、楽しく踊りたい仲間、大歓迎です！スタジオでお待ちしていまーす！
						<br />
						(20代 / 女性)
					</p>
				</div>
				<div class="top__voice__box">
					<figure><img src="<?php echo esc_url(get_theme_file_uri('/assets/img/top/woman02.svg')); ?>" alt="" width="150" height="150" /></figure>
					<p class="top__voice__box--txt">
						ジャズダンスを学んでの良さは、リズム感を養うことができます。そして、姿勢を気にするようになりました。わからないところも気軽に質問できる、アットホームな雰囲気が大好きです！<br>
						<br>
						(女性)
					</p>
				</div>
			</section>

			<p class="lp__ttl" id="form">体験レッスンの<br class="sm-only" />お申し込みはこちらから</p>
			<div class="top__contactForm">
				<p class="top__contactForm__note">
					体験レッスン（レッスン内容・ご希望日時・服装など）や見学に関するご質問・お問い合わせは、下記フォームよりご連絡ください。<br>
					折り返し、担当者よりメールでご返信いたします。ダンス未経験の方や全く初めての方も大歓迎です！
				</p>

				<!-- <p class="top__contactForm__txt">お名前(必須)<span class="pink">*</span></p>
				<input type="text" name="name" value="" class="" />
				<p class="top__contactForm__txt">メールアドレス(必須)<span class="pink">*</span></p>
				<input type="email" name="mail" value="" class="" />
				<p class="top__contactForm__txt">タイトル</p>
				<input type="text" name="title" value="" class="" />
				<p class="top__contactForm__txt">メッセージ内容</p>
				<textarea name="contents" cols="40" rows="10"></textarea>

				<div class="submit">
					<input type="submit" value="送信" class="wpcf7-form-control wpcf7-submit" /><span class="ajax-loader"></span>
				</div> -->
				<?php echo apply_shortcodes('[contact-form-7 id="b5a40c5" title="お問い合わせ"]'); ?>
			</div>

			<div class="modSns">
				<p class="modSns__txt">各SNSで Leia Dance Studioの<br class="sm-only" />最新情報を発信しています。<br />フォロー頂けると嬉しいです！</p>
				<div class="modSnsLinks">
					<a href="https://x.com/leiadancestudio" target="_blank"><img src="<?php echo esc_url(get_theme_file_uri('/assets/img/common/x-color.svg')); ?>" alt="X" width="40" height="40" /></a>
					<a href="https://www.instagram.com/leia_dance_studio/" target="_blank"><img src="<?php echo esc_url(get_theme_file_uri('/assets/img/common/insta-color.svg')); ?>" alt="Instagram" width="43" height="43" /></a>
					<a href="https://www.facebook.com/leia.dance.studio/" target="_blank"><img src="<?php echo esc_url(get_theme_file_uri('/assets/img/common/fb-color.svg')); ?>" alt="facebook" width="46" height="46" /></a>
				</div>
			</div>
		</div>
	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
