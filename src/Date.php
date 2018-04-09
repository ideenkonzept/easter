<?php
/**
 * User: Ahmed Dabak
 * Date: 09.04.2018
 * Time: 17:31
 */

namespace Ideenkonzept\Easter;


use Carbon\Carbon;

class Date {

	public static function year( $year ) {
		$instance = new static();

		return $instance->easterDate( $year );
	}

	private function easterDate( $year ): Carbon {
		return Carbon::createFromTimestamp( easter_date( $year ) );
	}

	public static function next() {
		$instance = new static();

		return $instance->easterDate( date( 'Y' ) )->gt( Carbon::now() ) ?
			$instance->easterDate( date( 'Y' ) ) :
			$instance->easterDate( date( 'Y' ) + 1 );
	}

	public static function last() {

		$instance = new static();

		return $instance->easterDate( date( 'Y' ) )->lt( Carbon::now() ) ?
			$instance->easterDate( date( 'Y' ) ) :
			$instance->easterDate( date( 'Y' ) - 1 );
	}
}