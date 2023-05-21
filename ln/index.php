<? include "../config/core.php";

   
	$site_name = 'link';
   $site_set['header'] = false;
   $site_set['footer'] = false;
   $css = ['ln'];
?>
<? include "../block/header.php"; ?>
<? unset($_SESSION['loader']); ?>


   <div class="lbl1">
      <div class="lbl1_t">
         <div class="lbl1_tc">
            <div class="lazy_img" data-src="/assets/img/bag/alibek79.png"></div>
         </div>
      </div>
      <div class="bl_c">
         <div class="lbl1_tj">
            <div class="lbl1_tjl">Alibek</div>
            <div class="lbl1_tjr">
               <? if ($site['instagram']): ?>
                  <a href="https://instagram.com/<?=$site['instagram']?>">
                     <i class="fab fa-instagram"></i>
                  </a>
               <? endif ?>
               <? if ($site['tiktok']): ?>
                  <a href="https://tiktok.com/<?=$site['tiktok']?>">
                     <div class="lazy_img" data-src="/assets/img/icons/Tiktok-icon-on-transparent-background-PNG.png"></div>
                  </a>
               <? endif ?>
               <? if ($site['youtube']): ?>
                  <a href="https://youtube.com/@<?=$site['youtube']?>">
                     <i class="fab fa-youtube"></i>
                  </a>
               <? endif ?>
               <? if ($site['telegram']): ?>
                  <a href="https://t.me/<?=$site['telegram']?>">
                     <i class="fab fa-telegram"></i>
                  </a>
               <? endif ?>
            </div>
         </div>
         <div class="lbl1_c">
            <div class="lbl1_cm">
               <h1>Әлемнің кез-келген</h1>
               <h1>жерінен</h1>
               <h1>инвестиция жаса</h1>
               <span class="lazy_img" data-src="/assets/img/bag/2841.png"></span>
               <!-- <h1>Трейдинг арқылы тұрақты әрі рисксіз табыс тап</h1> -->
            </div>
         </div>
         
      </div>
      <div class="lbl1_cmc">
         <!-- <div class="lbl1_cmh">Alibek Bauyrzhanuly</div> -->
         <div class="lbl1_cmh">Әлібек Бауыржанұлы</div>
         <div class="lbl1_cmp">2014 жылдан бастап финансовый рынокта торговля жасаймын (криптавалюта, акция, форекс)</div>
      </div>
   </div>

   <div class="lbl10">
      <div class="bl_c">
         <!-- <div class="head_c">
            <h3>Танымал</h3>
            <h3>курстарым</h3>
         </div> -->
         <div class="lbl10_c">
            <div class="lbl10_cm">
               <a class="lbl10_cml" target="_blank" href="#">
                  <div class="lbl10_cmle">
                     <div class="lazy_img" data-src="/assets/img/bag/2581.png"></div>
                  </div>
                  <div class="lbl10_cmlb">
                     <div class="lbl10_cmlbh">Консультация</div>
                     <ul class="lbl10_cmlbp">
                        <li>Жеке өзім разбор жасаймын</li>
                        <li>Трейдинг саласы бойынша 10 жылдық тәжірибеммен бөлісемін</li>
                        <li>Кеңес алу ұзақтығы 2 сағат</li>
                        <!-- <li></li> -->
                     </ul>
                     <div class="btn">Жазылу</div>
                  </div>
               </a>
               <a class="lbl10_cml" target="_blank" href="#">
                  <div class="lbl10_cmle">
                     <div class="lazy_img" data-src="/assets/img/bag/08.png"></div>
                  </div>
                  <div class="lbl10_cmlb">
                     <div class="lbl10_cmlbh">Онлайн мастер-класс</div>
                     <ul class="lbl10_cmlbp">
                        <li>2000-нан астам адам мастер-классты нәтижелі өтті</li>
                        <li>Мастер-класс ұзақтығы 2 сағат</li>
                        <li>Крипта әлем мини курсы сыйға беріледі</li>
                        <!-- <li></li> -->
                     </ul>
                     <div class="btn">Қатысу</div>
                  </div>
               </a>
               <a class="lbl10_cml" target="_blank" href="#">
                  <div class="lbl10_cmle">
                     <div class="lazy_img" data-src="/assets/img/bag/kerfin7_nea_2788.png"></div>
                  </div>
                  <div class="lbl10_cmlb">
                     <div class="lbl10_cmlbh">Курс Trading Pro</div>
                     <ul class="lbl10_cmlbp">
                        <li>Курсты 800 адам толық өтіп шықты</li>
                        <li>2 айлық практикалық курс</li>
                        <li>Түлектердің курсты бағалауы - 10 на 9.7</li>
                        <li>Толық практикадан тұратын курс</li>
                     </ul>
                     <div class="btn">Сатып алу</div>
                  </div>
               </a>

            </div>
            <!-- <div class="lbl10_cb">
               <a class="btn" href="#/projects/">Барлық жобаларымды қарау</a>
               <a class="btn btn_back3" href="/">Білім беру платформама өту</a>
            </div> -->
         </div>
      </div>
   </div>

   <div class="lbl12">
      <div class="bl_c">
         <div class="head_c">
            <h4>Менімен байланысу</h4>
         </div>
         <div class="lbl12_c">
            <a href="https://wa.me/<?=$site['whatsapp']?>" class="btn btn_whatsapp">
               <i class="fab fa-whatsapp"></i>
               <span>Whatsapp-ма жазу</span>
            </a>
            <a href="tel:<?=$site['phone']?>" class="btn">
               <i class="far fa-phone-alt"></i>
               <span>Қоңырау шалу</span>
            </a>
         </div>
      </div>
   </div>


   <!-- <div class="lbl1_cb" id="top2">
      <div class="lbl1_cbc">
         <? if ($site['instagram']): ?>
            <a href="https://instagram.com/<?=$site['instagram']?>">
               <i class="fab fa-instagram"></i>
               <span>Instagram</span>
            </a>
         <? endif ?>
         <? if ($site['tiktok']): ?>
            <a href="https://tiktok.com/<?=$site['tiktok']?>">
               <div class="lazy_img" data-src="/assets/img/icons/Tiktok-icon-on-transparent-background-PNG.png"></div>
               <span>Tik-Tok</span>
            </a>
         <? endif ?>
         <? if ($site['youtube']): ?>
            <a href="https://youtube.com/@<?=$site['youtube']?>">
               <i class="fab fa-youtube"></i>
               <span>YouTube</span>
            </a>
         <? endif ?>
         <? if ($site['telegram']): ?>
            <a href="https://t.me/<?=$site['telegram']?>">
               <i class="fab fa-telegram"></i>
               <span>Telegram</span>
            </a>
         <? endif ?>
      </div>
      <div class="lbl1_cbs">
         <i class="fal fa-info-circle"></i>
         <span>Әлеуметтік желіме жазылуды ұмытпаңыз</span>
      </div>
   </div> -->



   <footer class="footer">
      <div class="bl_c">
         <div class="footer_b">
            <div class="footer_br">
               <a href="https://gprog.kz" target="_blank" class="gprog_bl">
                  <span>#gprog-та</span>
                  <div class="gprog_heart"><i class="fas fa-heart"></i></div>
                  <span>жасалған</span>
                  <div class="gprog_ab">
                     <div class="gprog_lg"><div class="lazy_img" data-src="https://gprog.kz/assets/img/logo/logo.png"></div></div>
                     <div class="gprog_h">G prog</div>
                     <div class="gprog_p">Бізбен өз онлайн мектебіңді аш!</div>
                  </div>
               </a>
            </div>
         </div>
      </div>
   </footer>

<? include "../block/footer.php"; ?>