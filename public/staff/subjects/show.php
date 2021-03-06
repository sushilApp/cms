<?php require_once('../../../private/initialize.php');
  $page_title = 'Staff subject-show';
  include(SHARED_PATH.'/staff_header.php');
  $id = $_GET['id'] ?? '1'; // PHP > 7.0
  $subject = find_subject_by_id($id);
?>
<div id="content">
  <a class="back-link" href="<?php echo url_for('/staff/subjects/index.php'); ?>">&laquo; Back to List</a>
  <div class="subject show">
    <h1>Subject: <?php echo h($subject['menu_name']); ?></h1>
    <div class="attributes">
      <dl>
        <dt>Menu Name</dt>
        <dd><?php echo h($subject['menu_name']); ?></dd>
      </dl>
      <dl>
        <dt>Position</dt>
        <dd><?php echo h($subject['position']); ?></dd>
      </dl>
      <dl>
        <dt>Visible</dt>
        <dd><?php echo $subject['visible'] == '1' ? 'true' : 'false'; ?></dd>
      </dl>
    </div>
  </div>
</div>
