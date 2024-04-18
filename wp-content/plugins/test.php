<?php

/*
 Plugin Name: Test
 */

/**
 *  列印測試
 *
 * @author Lawson
 */
function helloWorld() {
    print_r("helloWorld!!!!!");
}

add_action( "helloWorld", "helloWorld" );

/**
 *  列印測試
 *
 * @author Lawson
 */
function testPrint() {
    print_r("HAHAHAHAHAHA123");
}

add_action( "testPrint", "testPrint" );
