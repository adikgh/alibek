<? include "../../../config/core.php";

   // 
   if (!$user_id) header('location: /education/');

   if (isset($_GET['id']) || $_GET['id'] != '') {
      $lesson_id = $_GET['id'];
      $lesson = db::query("select * from course_lesson where id = '$lesson_id'");
      if (mysqli_num_rows($lesson)) {
         $lesson = mysqli_fetch_assoc($lesson);
         $block_id = $lesson['block_id'];
         $course_id = fun::block($block_id);

         $course_d = fun::course($course_id);
         if (@$course_d['private']) header('location: /education/'.$course_d['private_link'].'/lesson.php?id='.$lesson_id);
         if (@$lesson['site']) header('location: /education/'.$lesson['site'].'?id='.$lesson_id);

         
         $sub = db::query("select * from course_pay where course_id = '$course_id' and user_id = '$user_id'");
         if (mysqli_num_rows($sub) == 1 && !$user_right) $sub_i = mysqli_fetch_array($sub); else $sub_i = 0;

         // 
         $sub_info = db::query("select * from course_pay_lesson where lesson_id = '$lesson_id' and user_id = '$user_id'");
         if (mysqli_num_rows($sub_info) != 0) {
            $sub_info_d = mysqli_fetch_array($sub_info);
            db::query("UPDATE `course_pay_lesson` SET `upd_dt` = '$datetime', `view` = 1 where lesson_id = '$lesson_id' and user_id = '$user_id'");
            if (!@$sub_info_d['lesson_stage']) $sub_info_d['lesson_stage'] = 1;
         } else { 
            db::query("INSERT INTO `course_pay_lesson`(`block_id`, `lesson_id`, `user_id`, `view`) VALUES ('$block_id', '$lesson_id', '$user_id', 1)");
            $sub_info_d['lesson_stage'] = 1;
         }

         $ls = db::query("select * from course_lesson where block_id = '$block_id'");
         $number_prev = $lesson['number'] - 1;
         $number_next = $lesson['number'] + 1;
         // while ($ls_d = mysqli_fetch_assoc($ls)) {
         //    $result = (strtotime(date("d.m.Y")) - strtotime($sub_i['ins_date'])) / (60*60*24*7);
         //    $weeks = floor($result);
         //    if (($ls_d['number']==$number_prev && $user_right) || ($ls_d['number']==$number_prev && $ls_d['open'] == 1)) $lesson_prev_id = $ls_d['id'];
         //    if (($ls_d['number']==$number_next && $user_right) || ($ls_d['number']==$number_next && $ls_d['open'] == 1 && $weeks >= $number_next)) $lesson_next_id = $ls_d['id'];
         // }

      } else header('location: /education/my/');
   } else header('location: /education/my/');


   // site setting
	$menu_name = 'lesson';
   $site_set['footer'] = false;
   $site_set['utop'] = $lesson['number'].'. '.$lesson['name_'.$lang];
   $site_set['utop_bk'] = 'course/?id='.$course_id;
   $site_set['plyr'] = true;
   $css = ['education/main', 'education/lesson'];
   $js = ['education/main', 'education/lesson'];
?>
<? include "../../block/header.php"; ?>

   <div class="les">
      <div class="ulesson">

         <? $info = db::query("select * from course_lesson_item where lesson_id = '$lesson_id' order by number asc"); ?>
         <? if (mysqli_num_rows($info)): ?>
            <div class="lsb">
               <div class="lsb_c lsb_it1" data-lesson-id="<?=$lesson['id']?>">

                  <? while ($sql = mysqli_fetch_assoc($info)): ?>
                     <? if ($sql['type'] == 'txt'): include "txt.php"; ?>
                     <? elseif ($sql['type'] == 'txt_warning'): include "txt.php"; ?>
                     <? elseif ($sql['type'] == 'video'): include "video.php"; ?>
                     <? elseif ($sql['type'] == 'mat'): include "file.php"; ?>
                     <? elseif ($sql['type'] == 'link'): include "link.php"; ?>
                     <? elseif ($sql['type'] == 'question_item'): include "question_item.php"; ?><? endif ?>
                     <? $data_number = $sql['number']; ?>
                  <? endwhile ?>
   
               </div>
            </div>
   
         <? else: ?>
            <div class="cup_cc">
               <div class="cup_ccname"> Сабақ әлі шыққан жоқ</div>
            </div>
         <? endif ?>
   
         <div class="ulesson_btn">
            <div class="ulesson_btn_c">
               <? if (@$lesson_prev_id): ?>
                  <a href="?id=<?=$lesson_prev_id?>" class="btn_prev">
                     <div class="btn btn_back">
                        <i class="fal fa-long-arrow-left"></i>
                        <span>Предыдущему уроку</span>
                     </div>
                  </a>
               <? endif ?>
               <a href="../?id=<?=$course_d['id']?>" class="btn_end">
                  <div class="btn btn_back">
                     <i class="far fa-times"></i>
                     <span>Закончить урок</span>
                  </div>
               </a>
               <? if (@$lesson_next_id): ?>
                  <a href="?id=<?=$lesson_next_id?>" class="btn_next">
                     <div class="btn btn_back">
                        <span>Следующий урок</span>
                        <i class="fal fa-long-arrow-right"></i>
                     </div>
                  </a>
               <? endif ?>
            </div>
         </div>
      </div>

      <div class="les_r"></div>

   </div>

<? include "../../block/footer.php"; ?>