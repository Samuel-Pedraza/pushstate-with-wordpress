 <?php wp_head(); ?>
 <form>
 	<div class="form-group">
 		<label>
 			Fruit
 			<input type="radio" name="display_cat" value="fruit" class="form-control" <?php $term = get_queried_object(); if($term->slug === "fruit"){ echo "checked"; } ?>>	
 		</label>
 	</div>
 	<div class="form-group">
 		<label>
 			Cars
 			<input type="radio" name="display_cat" value="cars" class="form-control" <?php $term = get_queried_object(); if($term->slug === "cars"){ echo "checked"; } ?>>
 		</label>
 	</div>
 	<div class="form-group">
 		<label>
 			Animals
 			<input type="radio" name="display_cat" value="animals" class="form-control" <?php $term = get_queried_object(); if($term->slug === "animals"){ echo "checked"; } ?>>
 		</label>
 	</div>
 </form>
 <div id="element">
 	
 </div>

 <?php wp_footer(); ?>