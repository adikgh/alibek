<? if ($user_right): ?>
   <div class="uitemc_um">
      <a class="uitemc_umi <?=(!$pod_menu_name?'uitemc_umi_act':'')?>" href="/education/course/?id=<?=$course_id?>">Сабақтар</a>
      <a class="uitemc_umi <?=($pod_menu_name=='users'?'uitemc_umi_act':'')?>" href="/education/course/users/?id=<?=$course_id?>">Оқушылар</a>
      <div class="uitemc_umid">
         <div class="uitemc_umi uitemc_umidl">Басқада</div>
         <div class="menu_c uitemc_umidc">
            <? if (!@$cours_d['setting']): ?>
               <div class="menu_ci cours_edit_pop">
                  <div class="menu_cin"><i class="fal fa-pen"></i></div>
                  <div class="menu_cih">Өзгерту</div>
               </div>
            <? endif ?>
            <div class="menu_ci cours_arh" data-id="<?=$cours_id?>">
               <? if (!@$cours_d['arh']): ?>
                  <div class="menu_cin"><i class="fal fa-archive"></i></div>
                  <div class="menu_cih">Архивке салу</div>
               <? else: ?>
                  <div class="menu_cin"><i class="fal fa-box-up"></i></div>
                  <div class="menu_cih">Архивтен шығару</div>
               <? endif ?>
            </div>
            <div class="menu_ci cours_del" data-id="<?=$cours_id?>">
               <div class="menu_cin"><i class="fal fa-trash"></i></div>
               <div class="menu_cih">Өшіру</div>
            </div>
         </div>
      </div>
   </div>
<? endif ?>