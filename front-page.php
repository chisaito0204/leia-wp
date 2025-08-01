<?php

/*
Template Name: top
*/

get_header();
?>

<div id="primary" class="content-area">
	<main>
		<div class="top">
			<!-- MV -->
			<section class="top__mv">
				<div class="swiper">
					<div class="swiper-wrapper">
						<h1 class="swiper-slide">
							<figure class="mvImg">
								<img src="<?php echo esc_url(get_theme_file_uri('/assets/img/top/mv01.jpg')); ?>" alt="ジャズダンス" width="1440" height="810" />
							</figure>
						</h1>
						<h1 class="swiper-slide">
							<figure class="mvImg">
								<img src="<?php echo esc_url(get_theme_file_uri('/assets/img/top/mv02.jpg')); ?>" alt="ジャズダンス" width="1440" height="810" />
							</figure>
						</h1>
						<h1 class="swiper-slide">
							<figure class="mvImg">
								<img src="<?php echo esc_url(get_theme_file_uri('/assets/img/top/mv03.jpg')); ?>" alt="ジャズダンス" width="1440" height="810" />
							</figure>
						</h1>
						<h1 class="swiper-slide">
							<figure class="mvImg">
								<img src="<?php echo esc_url(get_theme_file_uri('/assets/img/top/mv04.jpg')); ?>" alt="ジャズダンス" width="1440" height="810" />
							</figure>
						</h1>
						<h1 class="swiper-slide">
							<figure class="mvImg">
								<img src="<?php echo esc_url(get_theme_file_uri('/assets/img/top/mv05.jpg')); ?>" alt="ジャズダンス" width="1440" height="810" />
							</figure>
						</h1>
					</div>
					<div class="swiper-pagination"></div>
				</div>

				<div class="top__mv__sns">
					<a href="https://x.com/leiadancestudio" target="_blank">
						<figure class="snsImg">
							<img src="<?php echo esc_url(get_theme_file_uri('/assets/img/common/x.svg')); ?>" alt="" width="20" height="20" />
						</figure>
					</a>
					<a href="https://www.instagram.com/leia_dance_studio/" target="_blank">
						<figure class="snsImg">
							<img src="<?php echo esc_url(get_theme_file_uri('/assets/img/common/instagram.svg')); ?>" alt="" width="20" height="20" />
						</figure>
					</a>
					<a href="https://www.facebook.com/leia.dance.studio/" target="_blank">
						<figure class="snsImg">
							<img src="<?php echo esc_url(get_theme_file_uri('/assets/img/common/facebook.svg')); ?>" alt="" width="20" height="20" />
						</figure>
					</a>
				</div>

				<a href="/lp" class="top__mv__banner">
					<figure class="bnImg">
						<img src="<?php echo esc_url(get_theme_file_uri('/assets/img/common/icon_dance.svg')); ?>" alt="" width="46" height="46" />
					</figure>
					<p class="">見学、体験レッスンはこちらから！</p>
				</a>

				<p class="top__mv__txt">Let's keep on dancing!!</p>
			</section>
			<!-- / MV -->

			<!-- お知らせ -->
			<?php
			$news_title = CFS()->get('news_title');
			$news_text_pc = CFS()->get('news_text_pc');
			$news_text_sp = CFS()->get('news_text_sp');

			if ($news_title && $news_text_pc && $news_text_sp) : ?>
				<section class="top__news">
					<div class="top__newsBox">
						<p class="top__newsBox__ttl"><?php echo CFS()->get('news_title'); ?></p>
						<p class="top__newsBox__txt lg-only"><?php echo CFS()->get('news_text_pc'); ?></p>
						<p class="top__newsBox__txt sm-only"><?php echo CFS()->get('news_text_sp'); ?></p>
					</div>
				</section>
			<?php endif; ?>
			<!-- / お知らせ -->

			<!-- LDSの特徴 -->
			<section class="top__about">
				<h2 class="top__title en">
					<figure><img src="<?php echo esc_url(get_theme_file_uri('/assets/img/common/ttl_dec-left.svg')); ?>" alt="" width="158" height="45" /></figure>
					<p>Leia Dance Studio<span class="ja">とは</span></p>
					<figure><img src="<?php echo esc_url(get_theme_file_uri('/assets/img/common/ttl_dec-right.svg')); ?>" alt="" width="158" height="45" /></figure>
				</h2>
				<div class="top__aboutBox">
					<figure class="aboutImg i01">
						<img src="<?php echo esc_url(get_theme_file_uri('/assets/img/top/about01.png')); ?>" alt="" width="624" height="429" />
					</figure>
					<p class="top__aboutBox__txt01 t01">
						<span>煌びやかな舞台のジャズダンスをあなたのものに！</span><br />
						ブロードウェイやディズニー、劇団四季、宝塚歌劇団の華やかなショーダンスやミュージカルダンスを、経験豊富な講師が親切丁寧に教えます。<br />
						<span>未経験者、初心者も大歓迎です。</span><br />
						本格的なジャズダンスを基本に、<span>ミュージカルダンス、モダンダンス、フラダンス、フラメンコ</span>など多彩なスタイルを融合した独自カリキュラムで、幅広い表現力が身につきます。80年代、90年代の懐かしい名曲から最新のヒット曲、ミュージカルの有名曲など様々な楽曲で楽しく踊れます。
					</p>
				</div>

				<div class="top__aboutBox">
					<p class="top__aboutBox__txt01 t02">
						Leia Dance Studio主催の<span>河野麻耶（こうのまや）</span>は、祖母・金光郁子のもとで1歳よりダンスを学び<span>舞踊歴は40年以上</span>にわたります。<br />
						日本ジャズダンス芸術協会主催コンクールにて成人部門特別賞、アダルト部門第1位、2007年コンクール最高位の<span>グランプリを「1920 U.S.A.」で受賞。</span>前身である金光郁子舞踊学園での商業公演や発表会、外部公演にも積極的に参加し豊富な経験を持っています。年齢、性別関係なく楽しく踊れる雰囲気のスタジオを作り、生徒さんが楽しく踊れる場を提供することを大切に考えています。
					</p>
					<figure class="aboutImg i02">
						<img src="<?php echo esc_url(get_theme_file_uri('/assets/img/top/about02.png')); ?>" alt="" width="665" height="420" />
						<p class="top__aboutBox__txt02">Jazz Dance</p>
					</figure>
				</div>

				<div class="top__aboutBox">
					<figure class="aboutImg i03">
						<img src="<?php echo esc_url(get_theme_file_uri('/assets/img/top/about03.png')); ?>" alt="" width="635" height="436" />
					</figure>
					<p class="top__aboutBox__txt01 t03">
						ダンスを通じて、体の内側からも美しくリフレッシュすることを目指しています。<br />
						ファッションやメイクなどの表面的な美しさだけではなく、姿勢や立ち振る舞いなど<span>内面的な美しさ</span>が備わります。何気ない仕草や行動もどんどん素敵になっていきます。姿勢の改善や柔軟性の強化だけでなく、心と体の健康を向上させる効果があります。ダンスを楽しみながら、<span>健康で美しい体、そして心のリフレッシュ</span>を手に入れましょう！
					</p>
				</div>
			</section>
			<!-- / LDSの特徴 -->

			<!-- NEWS(ブログ) -->
			<?php
			$args = array(
				'post_type' => 'blog',
				'posts_per_page' => 3,
				// 'order' => 'DESC',
				'tax_query' => array(
					array(
						'taxonomy' => 'blog_category',
						'field'    => 'slug',
						'terms'    => 'news',
					),
				),
			);
			$the_query = new WP_Query($args);
			?>

			<?php if ($the_query->have_posts()) : ?>
				<section class="top__blog">
					<h2 class="top__title en">
						<figure><img src="<?php echo esc_url(get_theme_file_uri('/assets/img/common/ttl_dec-left.svg')); ?>" alt="" width="158" height="45" /></figure>
						<span>News<br /><span class="sub">お知らせ</span></span>
						<figure><img src="<?php echo esc_url(get_theme_file_uri('/assets/img/common/ttl_dec-right.svg')); ?>" alt="" width="158" height="45" /></figure>
					</h2>

					<div class="top__blogBox swiper">
						<div class="swiper-wrapper">
							<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
								<?php
								$days = 7;
								$today = date_i18n('U');
								$entry = get_the_time('U');
								$termn = date('U', ($today - $entry)) / 86400;
								?>

								<div class="swiper-slide">
									<a href="<?php the_permalink(); ?>" class="top__blogBox__article">
										<figure><?php the_post_thumbnail('full'); ?></figure>
										<div class="top__blogBox__articleTags">
											<div class="top__blogBox__articleTags--box">
												<?php
												$terms = get_the_terms($post->ID, 'blog_category');
												if ($terms && !is_wp_error($terms)) {
													foreach ($terms as $term) :
														$url = get_term_link($term, 'blog_category');
												?>
														<p class="top__blogBox__articleTags--tag"><?php echo $term->name; ?></p>
												<?php
													endforeach;
												}

												if ($the_query->current_post < 2 && $days > $termn) {
													echo '<span class="new">New!</span>';
												}
												?>
											</div>
											<p class="top__blogBox__articleTags--date"><?php the_time('Y/m/d'); ?></p>
										</div>
										<p class="top__blogBox__articleTxt"><?php the_title(); ?></p>
									</a>
								</div>
							<?php endwhile; ?>
						</div>
						<div class="swiper-pagination"></div>
					</div>
					<a href="/blog" class="modMoreBtn">もっと詳しく</a>
				</section>
			<?php endif; ?>
			<?php wp_reset_postdata(); ?>
			<!-- 	/ NEWS(ブログ) -->

			<!-- 動画バックグラウンド -->
			<div class="top__video jarallax">
				<video class="video jarallax-img" src="<?php echo esc_url(get_theme_file_uri('/assets/img/top/maya_monalisa.mp4')); ?>" loop autoplay muted playsinline></video>
			</div>
			<!-- / 動画バックグラウンド -->

			<!-- 講師 -->
			<section class="top__teacher">
				<h2 class="top__title">
					<figure><img src="<?php echo esc_url(get_theme_file_uri('/assets/img/common/ttl_dec-left.svg')); ?>" alt="" width="158" height="45" /></figure>
					講師
					<figure><img src="<?php echo esc_url(get_theme_file_uri('/assets/img/common/ttl_dec-right.svg')); ?>" alt="" width="158" height="45" /></figure>
				</h2>

				<div class="top__teacherBox">
					<figure class="top__teacherBox__prof">
						<img src="<?php echo esc_url(get_theme_file_uri('/assets/img/top/Maya_Kohno.png')); ?>" alt="河野麻耶" width="485" height="485" />
					</figure>
					<div class="top__teacherBox__txtbox">
						<p class="top__teacherBox__txtbox--name">河野麻耶<br /><span>Maya Kohno</span></p>
						<ul class="top__teacherBox__txtbox--text">
							<li>舞踊家</li>
							<li>レイアダンススタジオ主宰</li>
							<li>一般社団法人日本ジャズダンス芸術協会会員</li>
							<li>よみうりカルチャー川口「ジャズダンス」クラス講師</li>
							<li>よみうりカルチャー大森「アクティブシニアのジャズダンス」クラス講師</li>
						</ul>
						<p class="top__teacherBox__txtbox--text">
							1歳の時より祖母である金光郁子のもとでダンスを学ぶ。舞踊歴40年以上。<br />
							<a href="" target="_blank">日本ジャズダンス芸術協会主催コンクール</a>にて1991年ジュニアの部次点「That’s A Plenty/Surfeit U.S.A」、1996年成人部門特別賞「オクラホマ」、2002年アダルト部門第1位「睡蓮」、2007年にはコンクール最高位の<a href="" target="_blank">グランプリを「1920 U.S.A.」で受賞。</a><br />
							Leia Dance Studio の前身の金光郁子舞踊学園においては、商業ミュージカル公演に14回出演、発表会は68回出演、外部公演にも積極的に出演するなど豊富なダンス舞台経験があります。
						</p>
					</div>
				</div>
				<a href="/instructor" class="modMoreBtn">もっと詳しく</a>
			</section>
			<!-- 	/ 講師 -->

			<!-- 生徒さまの声 -->
			<section class="top__voice">
				<h2 class="top__title">
					<figure><img src="<?php echo esc_url(get_theme_file_uri('/assets/img/common/ttl_dec-left.svg')); ?>" alt="" width="158" height="45" /></figure>
					生徒さまの声
					<figure><img src="<?php echo esc_url(get_theme_file_uri('/assets/img/common/ttl_dec-right.svg')); ?>" alt="" width="158" height="45" /></figure>
				</h2>

				<div class="top__voice__box">
					<figure><img src="<?php echo esc_url(get_theme_file_uri('/assets/img/top/woman01.svg')); ?>" alt="" width="150" height="150" /></figure>
					<p class="top__voice__box--txt">
						表現することが大好きです！河野麻耶先生の丁寧で楽しいレッスンに通い、毎日が心身ともに充実しています。<br />
						<br />
						(60代 / 女性)
					</p>
				</div>
				<div class="top__voice__box">
					<figure><img src="<?php echo esc_url(get_theme_file_uri('/assets/img/top/woman02.svg')); ?>" alt="" width="150" height="150" /></figure>
					<p class="top__voice__box--txt">
						Leia Dance Studio の良いところ：自由が丘駅から近くて、とっても便利です。 生徒の年齢幅がありますが、みんな仲良くフォローもしてくれます<br />
						<br />
						(女性)
					</p>
				</div>
				<div class="top__voice__box">
					<figure><img src="<?php echo esc_url(get_theme_file_uri('/assets/img/top/woman01.svg')); ?>" alt="" width="150" height="150" /></figure>
					<p class="top__voice__box--txt">
						毎レッスン、その日集まったメンバーに合ったスピードで進むので久々のレッスンでも全く心配いらないです。わからないところも気軽に質問できる、アットホームな雰囲気が大好きです！<br />
						<br />
						(20代 / 女性)
					</p>
				</div>
			</section>
			<!-- / 生徒さまの声 -->
			<!-- クラス -->
			<section class="top__class">
				<h2 class="top__title">
					<figure><img src="<?php echo esc_url(get_theme_file_uri('/assets/img/common/ttl_dec-left.svg')); ?>" alt="" width="158" height="45" /></figure>
					クラス
					<figure><img src="<?php echo esc_url(get_theme_file_uri('/assets/img/common/ttl_dec-right.svg')); ?>" alt="" width="158" height="45" /></figure>
				</h2>

				<div class="top__classBox">
					<div class="top__classBox__txtbox">
						<p class="top__classBox__txtbox--ttl">オープンクラスでも初心者大歓迎！</p>
						<p class="top__classBox__txtbox--txt">
							レベルや経験に関係なく気軽に<br class="sm-only" />参加できるオープンクラス制です。<br />
							参加されている生徒さんのペースに合わせて丁寧に指導しますので、<br />
							初心者から経験者まで安心して参加できます。<br />
							色々の作品を無理ないペースで、<br />
							経験者と安心して一緒に踊る事もできます。
						</p>
						<p class="top__classBox__txtbox--dec">One Team</p>
					</div>
					<figure class="top__classBox__img">
						<img src="<?php echo esc_url(get_theme_file_uri('/assets/img/top/class01.jpg')); ?>" alt="" width="588" height="315" />
					</figure>
				</div>

				<div class="top__classBox">
					<figure class="top__classBox__img">
						<img src="<?php echo esc_url(get_theme_file_uri('/assets/img/top/class02.jpg')); ?>" alt="" width="588" height="315" />
					</figure>
					<div class="top__classBox__txtbox">
						<p class="top__classBox__txtbox--ttl">洗練されたダンスを身近に</p>
						<p class="top__classBox__txtbox--txt">ブロードウェイやディズニー、劇団四季、宝塚歌劇団などの華やかな舞台で踊られるショーダンスやミュージカルダンスを始め、モダンダンスやフラメンコなど様々なダンススタイルを融合した洗練されたジャズダンスを学ぶことができます。多様なダンススタイルを取り入れた独自のカリキュラムで、幅広い表現力を身につけることができます。</p>
						<p class="top__classBox__txtbox--dec">Let’s Dance!!</p>
					</div>
				</div>

				<div class="top__classBox">
					<div class="top__classBox__txtbox">
						<p class="top__classBox__txtbox--ttl">アットホームな雰囲気</p>
						<p class="top__classBox__txtbox--txt">レイアダンススタジオは、10代から70代まで幅広い年齢層の生徒が通うアットホームな雰囲気です。初心者でも安心して参加できるよう、基礎から丁寧に指導する体制が整っています。</p>
						<p class="top__classBox__txtbox--dec">Homey</p>
					</div>
					<figure class="top__classBox__img">
						<img src="<?php echo esc_url(get_theme_file_uri('/assets/img/top/class03.jpg')); ?>" alt="" width="588" height="315" />
					</figure>
				</div>
				<a href="/about" class="modMoreBtn">もっと詳しく</a>
			</section>
			<!-- 	/ クラス -->

			<!-- レッスン時間・料金 ・場所 -->
			<section class="top__lesson">
				<h2 class="top__title">
					<figure><img src="<?php echo esc_url(get_theme_file_uri('/assets/img/common/ttl_dec-left.svg')); ?>" alt="" width="158" height="45" /></figure>
					レッスン時間・料金 ・場所
					<figure><img src="<?php echo esc_url(get_theme_file_uri('/assets/img/common/ttl_dec-right.svg')); ?>" alt="" width="158" height="45" /></figure>
				</h2>

				<h3 class="top__subtitle">︎<span>Schedule</span></h3>
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
				<p class="top__lesson__schedule--note">
					※各レッスンは80分間です（スタジオは2時間借りていますので、20分前から入室できます）<br />
					※レッスン時間の前後の各20分間で着替え、準備、チケットの購入等をお願いいたします<br />
					※曜日によってレッスンスタジオが異なりますのでレッスン受講、見学の際にはご注意ください<br />
					※各曜日でレッスン教材が異なります。詳細は、メールマガジン（登録は<a href="/#mailmaga" class="pink">こちら→</a>）やSNSをご参照ください
				</p>

				<div class="top__lesson__flow">
					<p class="top__lesson__flow--ttl">レッスン内容</p>
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
							いきなり音楽に合わせるのではなく、カウントで振付します。その後、音楽に合わせて踊っていきます。初心者の方には無理ない範囲での振付にしたり、経験者には更にレベルアップとなるような振付けを行うなど臨機応変に対応いたします。分からないときには、随時質問して頂いて大丈夫です。なお各教材のワンポイントレッスン（初心者向け、経験者向け）をメルマガ（登録は<a href="#mailmaga">こちら→</a>）でも配信しています。
						</p>
					</div>
				</div>

				<div class="top__lesson__rule">
					<p class="top__lesson__rule--ttl">クラスのルール</p>
					<p class="top__lesson__rule--txt">
						<span class="indent01">※レッスン開始時間の20分以上前にはスタジオに入ることはできません。</span>
						<span class="indent01">※レッスン後のスタジオのお掃除は不要ですが更衣スペースやトイレは綺麗に使いましょう。</span>
						<span class="indent01">※シューズはジャズシューズまたはバレエシューズを推奨いたします（屋内シューズも可）。これから購入される方はご相談にのります。</span>
						<span class="indent01">※アクセサリー等の着用は落下などによる怪我防止のためレッスン中は極力外してください。</span>
					</p>
				</div>

				<h3 class="top__subtitle ja">︎<span>料金</span></h3>
				<div class="top__lesson__fee">
					<p class="top__lesson__fee--txt">ー チケット回数と金額 ー</p>
					<p class="top__lesson__feeBox--note">
						<span class="indent01">※チケット回数制になります</span>
						<span class="indent01">※遅刻や早退をしても１レッスンで１回分消費いたしますのでご注意下さい</span>
						<span class="indent01">※田園調布スタジオ、自由が丘スタジオどちらで入会、レッスンをうけても金額やチケット消費分は変わりません</span>
					</p>
					<table>
						<tbody>
							<tr>
								<th>回数</th>
								<th>金額(税込)</th>
								<th>有効期限</th>
								<th>1レッスンあたり</th>
							</tr>
							<tr class="tr01">
								<td>5回</td>
								<td>16,500円</td>
								<td>購入後3ヶ月</td>
								<td>3,300円</td>
							</tr>
							<tr class="tr02">
								<td>10回</td>
								<td>33,000円</td>
								<td>購入後3ヶ月</td>
								<td>3,300円</td>
							</tr>
							<tr class="tr01">
								<td>15回</td>
								<td>47,025円</td>
								<td>購入後6ヶ月</td>
								<td>3,135円</td>
							</tr>
							<tr class="tr02">
								<td>20回</td>
								<td>59,400円</td>
								<td>購入後6ヶ月</td>
								<td>2,970円</td>
							</tr>
						</tbody>
					</table>

					<div class="top__lesson__feeBox">
						<figure class="iconImg02">
							<img src="<?php echo esc_url(get_theme_file_uri('/assets/img/top/ico_yen.svg')); ?>" alt="" width="73" height="73" />
						</figure>

						<div>
							<p class="top__lesson__feeBox--ttl">入会金 ￥11,000 （税込）</p>
							<p class="top__lesson__feeBox--note">※入会金は返金致しません</p>
						</div>
					</div>
					<div class="top__lesson__feeBox">
						<figure class="iconImg01">
							<img src="<?php echo esc_url(get_theme_file_uri('/assets/img/top/ico_dance.svg')); ?>" alt="" width="113" height="113" />
						</figure>
						<div>
							<p class="top__lesson__feeBox--ttl">
								体験レッスン ￥2,200円（税込）<br />
								ビジター ￥3,300円（税込）
							</p>
							<p class="top__lesson__feeBox--note lg-only">
								<span>
									※チケットを買う前に一度体験してみたい、ビジターで1回まずはレッスンしたいという方、大歓迎です
								</span>
								<br>
								<span>
									※体験レッスンは入会前の一度限りとなります
								</span>
							</p>
						</div>
					</div>
					<p class="top__lesson__feeBox--notesp sm-only">
						<span class="indent01">※チケットを買う前に一度体験してみたい、ビジターで1回まずはレッスンしたいという方、大歓迎です</span>
						<span class="indent01">※体験レッスンでは動きやすい服装でお越しください</span>
						<span class="indent01">※レッスン風景の写真撮影及び動画撮影はお断りしております</span>
					</p>

					<p class="top__lesson__fee--payment">
						<span class="txt01">お支払い方法</span><br />
						<span class="txt02">現金または銀行振込となります。</span><br />
						クレジットカード払いやキャッシュレス払いには現在対応しておりません。<br />
						<br />
						<span class="txt03">
							◎お振り込み口座銀行：三井住友銀行支店：新横浜支店（322）<br />
							口座番号：(普通) 921877<br />
							口座名義：Studio Leia 河野 麻耶<br />
							口座名義（カナ）：スタジオ レイア コウノ マヤ
						</span>
					</p>
				</div>

				<h3 class="top__subtitle ja">︎<span>アクセス</span></h3>
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
			</section>
			<!-- 	/ レッスン時間・料金 ・場所 -->

			<!-- FAQ -->
			<section class="top__faq">
				<h2 class="top__title en">
					<figure><img src="<?php echo esc_url(get_theme_file_uri('/assets/img/common/ttl_dec-left.svg')); ?>" alt="" width="158" height="45" /></figure>
					<span>FAQ<br /><span class="sub">よくあるご質問</span></span>
					<figure><img src="<?php echo esc_url(get_theme_file_uri('/assets/img/common/ttl_dec-right.svg')); ?>" alt="" width="158" height="45" /></figure>
				</h2>

				<div class="top__faq__inner">
					<div class="top__faq__inner--qu">
						<span class="qu">見学、体験レッスンはできますか？</span>
					</div>
					<div class="top__faq__inner--an" style="display: none;">
						<span class="an">
							体験レッスン、見学大歓迎です。まったく初めての方でも大丈夫です。<br />
							見学は無料です。体験レッスンは、2,200円（税込）となりますので事前に現金にてご用意ください。<br />
							見学、体験レッスンの際には、一度、<a href="#contact">お問い合わせフォーム</a>かメールにてご連絡頂ければ幸いです。
						</span>
					</div>
				</div>
				<div class="top__faq__inner">
					<div class="top__faq__inner--qu">
						<span class="qu">全くの初心者ですが大丈夫でしょうか？</span>
					</div>
					<div class="top__faq__inner--an" style="display: none;">
						<span class="an">
							はい、全くダンス未経験者でも問題ありません。初心者でも<a href="/instructor">講師</a>がしっかりと丁寧に指導いたしますので安心して参加して下さい。
						</span>
					</div>
				</div>
				<div class="top__faq__inner">
					<div class="top__faq__inner--qu">
						<span class="qu">どんな服装が良いですか？</span>
					</div>
					<div class="top__faq__inner--an" style="display: none;">
						<span class="an">
							Ｔシャツ、タイツ／レギンス／ロングパンツ、ダンスシューズ（バレエシューズ、ジャズダンスシューズなど屋内用シューズ）など動きやすい服装でお越しください。<br />
							不明な方、ご心配な方はお問い合わせください。
						</span>
					</div>
				</div>
				<a href="/faq" class="modMoreBtn">もっと詳しく</a>
			</section>
			<!-- 	/ FAQ -->

			<!-- ダンスギャラリー -->
			<section class="top__media">
				<h2 class="top__title">
					<figure><img src="<?php echo esc_url(get_theme_file_uri('/assets/img/common/ttl_dec-left.svg')); ?>" alt="" width="158" height="45" /></figure>
					ダンスギャラリー
					<figure><img src="<?php echo esc_url(get_theme_file_uri('/assets/img/common/ttl_dec-right.svg')); ?>" alt="" width="158" height="45" /></figure>
				</h2>

				<div class="swiper lg-only">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<iframe width="350" height="210" src="https://www.youtube.com/embed/991zxRKctC8?si=cjfsnv3dCSCoJd56" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
						</div>
						<div class="swiper-slide">
							<iframe width="350" height="210" src="https://www.youtube.com/embed/LhvjzKYFJJw?si=jQxNAWpTp1gXOtX-" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
						</div>
						<div class="swiper-slide">
							<iframe width="350" height="210" src="https://www.youtube.com/embed/1jEHCU8bp1A?si=kF-HB5Fi7yW4T4Y4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
						</div>
						<div class="swiper-slide">
							<iframe width="350" height="210" src="https://www.youtube.com/embed/AzGRiG1nrYM?si=zFDplSrZhNzzpDPg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
						</div>
					</div>
					<div class="swiper-pagination"></div>
				</div>

				<div class="top__media__sp sm-only">
					<div class="top__media__spVideo">
						<iframe width="350" height="210" src="https://www.youtube.com/embed/LhvjzKYFJJw?si=jQxNAWpTp1gXOtX-" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
					</div>
					<div class="top__media__spVideo">
						<iframe width="350" height="210" src="https://www.youtube.com/embed/991zxRKctC8?si=cjfsnv3dCSCoJd56" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
					</div>
					<div class="top__media__spVideo">
						<iframe width="350" height="210" src="https://www.youtube.com/embed/1jEHCU8bp1A?si=kF-HB5Fi7yW4T4Y4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
					</div>
				</div>

				<a href="/gallery" class="modMoreBtn">もっと詳しく</a>
			</section>
			<!-- / ダンスギャラリー -->

			<!-- 体験見学LPバナー -->
			<div class="top__banner">
				<a href="/lp">
					<figure class="bannerImg lg-only">
						<img src="<?php echo esc_url(get_theme_file_uri('/assets/img/top/banner.jpg')); ?>" alt="" width="1087" height="594" />
					</figure>
					<figure class="bannerImg sm-only">
						<img src="<?php echo esc_url(get_theme_file_uri('/assets/img/top/sp/banner.jpg')); ?>" alt="" width="356" height="376" />
					</figure>
				</a>
			</div>
			<!-- / 体験見学LPバナー-->

			<!-- メルマガ登録 -->
			<div class="top__mailmaga" id="mailmaga">
				<p class="top__mailmaga--ttl">公式メールマガジンの登録</p>
				<p class="top__mailmaga--subttl">Leia Dance Studio 公式メルマガ<br class="sm-only"> "Let's keep on dancing!" では、<br>レッスンの作品やプチアドバイス、<br class="sm-only">イベント情報など最新情報を発信しています！</p>
				<script language="javascript" type="text/javascript">
					function jf_MMWindowOpen99407(ptype) {
						window.open("about:blank", "MMSUB", "width=500,height=200,scrollbars=yes,status=yes,resizable=yes");
						document.frmLMM99407.target = "MMSUB";
						document.frmLMM99407.action = "https://api.lolipop.jp/api/api.php?cmd=mm&type=" + ptype;
						document.frmLMM99407.submit();
					}
				</script>
				<form name="frmLMM99407" method="post">
					<input type="hidden" name="account" value="dance">
					<input type="hidden" name="domain" value="mm.studio-leia.jp">
					<p class="top__mailmaga--txt">お名前</p>
					<input type="text" style="width:240px;" name="user_name"><br>
					<p class="top__mailmaga--txt">メールアドレス</p>
					<input type="text" style="width:240px;" name="user_mail"><br>
					<input type="button" name="join" value="参加" onclick="jf_MMWindowOpen99407('join');">
					<input type="button" name="resign" value="退会" onclick="jf_MMWindowOpen99407('resign');">
				</form>
			</div>
			<!-- / メルマガ登録 -->

			<!-- CONTACT -->
			<section class="top__contact" id="contact">
				<h2 class="top__title en">
					<figure><img src="<?php echo esc_url(get_theme_file_uri('/assets/img/common/ttl_dec-left.svg')); ?>" alt="" width="158" height="45" /></figure>
					<span>Contact<br /><span class="sub">お問い合わせ</span></span>
					<figure><img src="<?php echo esc_url(get_theme_file_uri('/assets/img/common/ttl_dec-right.svg')); ?>" alt="" width="158" height="45" /></figure>
				</h2>
				<div class="top__contactForm">
					<p class="top__contactForm__note">
						レッスンに関する質問や問い合わせは下記のフォームから送りください。<br />
						折り返しメールにて担当者から連絡いたします。メールアドレスは間違いないよう記載ください。<br />
						体験レッスン、レッスン内容などについてもお気軽にご連絡ください。
					</p>
					<?php echo apply_shortcodes('[contact-form-7 id="b5a40c5" title="お問い合わせ"]'); ?>

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

				</div>
			</section>
			<!-- 	/ CONTACT -->
		</div>
	</main><!-- .site-main -->
</div><!-- .content-area -->

<?php
get_footer();
