<?php
/* Template Name: Search page */

get_header(); ?>

<div class="main-content">
<a href="../category/news/"><button>News</button></a>
<a href="../category/interview/"><button>Interviews</button></a>
  <?php get_search_form(); ?>
</div>

<?php get_footer(); ?>