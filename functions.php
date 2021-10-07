<?php

add_filter( 'tribe_tickets_block_ticket_html_attributes', 'rt_et_woo_payments_fatal_fix' );

function rt_et_woo_payments_fatal_fix( $attrs ) {
	if ( ! isset( $attrs['data-ticket-price'] ) ) {
		return $attrs;
	}

	$attrs['data-ticket-price'] = (string) $attrs['data-ticket-price'];

	return $attrs;
}
