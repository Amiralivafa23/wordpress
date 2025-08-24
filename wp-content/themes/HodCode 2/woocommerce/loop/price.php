<?php

if (! defined('ABSPATH')) {
	exit; // Exit if accessed directly
}

global $product;

$price        = floatval($product->get_price());
$regularPrice = floatval($product->get_regular_price());

$offPercent = 0;
if ($price > 0 && $regularPrice > 0 && $regularPrice > $price) {
	$offPercent = 100 * ($regularPrice - $price) / $regularPrice;
}
?>

<?php if ($price_html = $product->get_price_html()) : ?>
	<span class="flex gap-2 items-center mb-3">
		<?php if ($offPercent): ?>
			<span class="bg-red-600 text-white px-1 rounded-md">
				<?= toPersianNumerals(number_format($offPercent)) ?>%
			</span>
		<?php endif; ?>
		<span class="grow"></span>
		<?php if ($offPercent): ?>
			<span class="text-gray-300 line-through"><?= toPersianNumerals(number_format($regularPrice)) ?></span>
		<?php endif; ?>
		<span><?= toPersianNumerals(number_format($price)) ?></span>
		<span>ریال</span>
	</span>
<?php endif; ?>
