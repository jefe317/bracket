<html>
<?php
// TEAMS

// The template for team variable names is
// [region]_team_[region ranking] for a total of 64 teams
// This should change every year, and was first entered into this
// php program using 2018's results. Weights were pulled from 1999-2018
// by taking the percentage each bracket won the match over those years

// South
$s_t_1 = "1 Virginia";
$s_t_16 = "16 UMBC";
$s_t_8 = "8 Creighton";
$s_t_9 = "9 Kansas State";
$s_t_5 = "5 Kentucky";
$s_t_12 = "12 Davidson";
$s_t_4 = "4 Arizona";
$s_t_13 = "13 Buffalo";
$s_t_6 = "6 Miami";
$s_t_11 = "11 Loyola-Chicago";
$s_t_3 = "3 Tennessee";
$s_t_14 = "14 Wright State";
$s_t_7 = "7 Nevada";
$s_t_10 = "10 Texas";
$s_t_2 = "2 Cincinnati";
$s_t_15 = "15 Georgia State";
// West
$w_t_1 = "1 Xavier";
$w_t_16 = "16 Texas Southern";
$w_t_8 = "8 Missouri";
$w_t_9 = "9 Florida State";
$w_t_5 = "5 Ohio State";
$w_t_12 = "12 South Dakota St";
$w_t_4 = "4 Gonzaga";
$w_t_13 = "13 UNC Greensboro";
$w_t_6 = "6 Houston";
$w_t_11 = "11 San Diego State";
$w_t_3 = "3 Michigan";
$w_t_14 = "14 Montana";
$w_t_7 = "7 Texas A&M";
$w_t_10 = "10 Providence";
$w_t_2 = "2 North Carolina";
$w_t_15 = "15 Lipscomb";
// East
$e_t_1 = "1 Villanova";
$e_t_16 = "16 Radford";
$e_t_8 = "8 Virginia Tech";
$e_t_9 = "9 Alabama";
$e_t_5 = "5 West Virginia";
$e_t_12 = "12 Murray State";
$e_t_4 = "4 Wichita State";
$e_t_13 = "13 Marshall";
$e_t_6 = "6 Florida";
$e_t_11 = "11 St. Bonaventure";
$e_t_3 = "3 Texas Tech";
$e_t_14 = "14 SF Austin";
$e_t_7 = "7 Arkansas";
$e_t_10 = "10 Butler";
$e_t_2 = "2 Purdue";
$e_t_15 = "15 CSU Fullerton";
// Midwest
$mw_t_1 = "1 Kansas";
$mw_t_16 = "16 Penn";
$mw_t_8 = "8 Seton Hall";
$mw_t_9 = "9 NC State";
$mw_t_5 = "5 Clemson";
$mw_t_12 = "12 New Mexico St";
$mw_t_4 = "4 Auburn";
$mw_t_13 = "13 Charleston";
$mw_t_6 = "6 TCU";
$mw_t_11 = "11 Syracuse";
$mw_t_3 = "3 Michigan State";
$mw_t_14 = "14 Bucknell";
$mw_t_7 = "7 Rhode Island";
$mw_t_10 = "10 Oklahoma";
$mw_t_2 = "2 Duke";
$mw_t_15 = "15 Iona";

// The template for variables in the next section is
// [region]_round_[round #]_game_[game #]
// Then we multiply the team by the percentage (as a whole number 0-100)
// that they will win that match. We then pick a random weighted winner
// and move on to the next round, until we get to the championships,
// where the winners from each region face off and we mash up the region names
// so we can keep track.

// SOUTH

$s_r_1_g_1_a = array_fill(0, 19, $s_t_1);
$s_r_1_g_1_b = array_fill(0, 1, $s_t_16);
$s_r_1_g_1_c = array_merge($s_r_1_g_1_a, $s_r_1_g_1_b);
$s_r_1_g_1 = $s_r_1_g_1_c[mt_rand(0, count($s_r_1_g_1_c) - 1)];

$s_r_1_g_2_a = array_fill(0, 13, $s_t_8);
$s_r_1_g_2_b = array_fill(0, 7, $s_t_9);
$s_r_1_g_2_c = array_merge($s_r_1_g_2_a, $s_r_1_g_2_b);
$s_r_1_g_2 = $s_r_1_g_2_c[mt_rand(0, count($s_r_1_g_2_c) - 1)];

$s_r_1_g_3_a = array_fill(0, 13, $s_t_5);
$s_r_1_g_3_b = array_fill(0, 7, $s_t_12);
$s_r_1_g_3_c = array_merge($s_r_1_g_3_a, $s_r_1_g_3_b);
$s_r_1_g_3 = $s_r_1_g_3_c[mt_rand(0, count($s_r_1_g_3_c) - 1)];

$s_r_1_g_4_a = array_fill(0, 16, $s_t_4);
$s_r_1_g_4_b = array_fill(0, 4, $s_t_13);
$s_r_1_g_4_c = array_merge($s_r_1_g_4_a, $s_r_1_g_4_b);
$s_r_1_g_4 = $s_r_1_g_4_c[mt_rand(0, count($s_r_1_g_4_c) - 1)];

$s_r_1_g_5_a = array_fill(0, 11, $s_t_6);
$s_r_1_g_5_b = array_fill(0, 9, $s_t_11);
$s_r_1_g_5_c = array_merge($s_r_1_g_5_a, $s_r_1_g_5_b);
$s_r_1_g_5 = $s_r_1_g_5_c[mt_rand(0, count($s_r_1_g_5_c) - 1)];

$s_r_1_g_6_a = array_fill(0, 19, $s_t_3);
$s_r_1_g_6_b = array_fill(0, 1, $s_t_14);
$s_r_1_g_6_c = array_merge($s_r_1_g_6_a, $s_r_1_g_6_b);
$s_r_1_g_6 = $s_r_1_g_6_c[mt_rand(0, count($s_r_1_g_6_c) - 1)];

$s_r_1_g_7_a = array_fill(0, 14, $s_t_7);
$s_r_1_g_7_b = array_fill(0, 6, $s_t_10);
$s_r_1_g_7_c = array_merge($s_r_1_g_7_a, $s_r_1_g_7_b);
$s_r_1_g_7 = $s_r_1_g_7_c[mt_rand(0, count($s_r_1_g_7_c) - 1)];

$s_r_1_g_8_a = array_fill(0, 18, $s_t_2);
$s_r_1_g_8_b = array_fill(0, 2, $s_t_15);
$s_r_1_g_8_c = array_merge($s_r_1_g_8_a, $s_r_1_g_8_b);
$s_r_1_g_8 = $s_r_1_g_8_c[mt_rand(0, count($s_r_1_g_8_c) - 1)];

$s_r_2_g_1_a = array_fill(0, 17, $s_r_1_g_1);
$s_r_2_g_1_b = array_fill(0, 3, $s_r_1_g_2);
$s_r_2_g_1_c = array_merge($s_r_2_g_1_a, $s_r_2_g_1_b);
$s_r_2_g_1 = $s_r_2_g_1_c[mt_rand(0, count($s_r_2_g_1_c) - 1)];

$s_r_2_g_2_a = array_fill(0, 9, $s_r_1_g_3);
$s_r_2_g_2_b = array_fill(0, 11, $s_r_1_g_4);
$s_r_2_g_2_c = array_merge($s_r_2_g_2_a, $s_r_2_g_2_b);
$s_r_2_g_2 = $s_r_2_g_2_c[mt_rand(0, count($s_r_2_g_2_c) - 1)];

$s_r_2_g_3_a = array_fill(0, 7, $s_r_1_g_5);
$s_r_2_g_3_b = array_fill(0, 13, $s_r_1_g_6);
$s_r_2_g_3_c = array_merge($s_r_2_g_3_a, $s_r_2_g_3_b);
$s_r_2_g_3 = $s_r_2_g_3_c[mt_rand(0, count($s_r_2_g_3_c) - 1)];

$s_r_2_g_4_a = array_fill(0, 10, $s_r_1_g_7);
$s_r_2_g_4_b = array_fill(0, 10, $s_r_1_g_8);
$s_r_2_g_4_c = array_merge($s_r_2_g_4_a, $s_r_2_g_4_b);
$s_r_2_g_4 = $s_r_2_g_4_c[mt_rand(0, count($s_r_2_g_4_c) - 1)];

$s_r_3_g_1_a = array_fill(0, 16, $s_r_2_g_1);
$s_r_3_g_1_b = array_fill(0, 4, $s_r_2_g_2);
$s_r_3_g_1_c = array_merge($s_r_3_g_1_a, $s_r_3_g_1_b);
$s_r_3_g_1 = $s_r_3_g_1_c[mt_rand(0, count($s_r_3_g_1_c) - 1)];

$s_r_3_g_2_a = array_fill(0, 9, $s_r_2_g_3);
$s_r_3_g_2_b = array_fill(0, 11, $s_r_2_g_4);
$s_r_3_g_2_c = array_merge($s_r_3_g_2_a, $s_r_3_g_2_b);
$s_r_3_g_2 = $s_r_3_g_2_c[mt_rand(0, count($s_r_3_g_2_c) - 1)];

$s_r_4_g_1_a = array_fill(0, 17, $s_r_3_g_1);
$s_r_4_g_1_b = array_fill(0, 3, $s_r_3_g_2);
$s_r_4_g_1_c = array_merge($s_r_4_g_1_a, $s_r_4_g_1_b);
$s_r_4_g_1 = $s_r_4_g_1_c[mt_rand(0, count($s_r_4_g_1_c) - 1)];

// WEST

$w_r_1_g_1_a = array_fill(0, 20, $w_t_1);
$w_r_1_g_1_b = array_fill(0, 1, $w_t_16);
$w_r_1_g_1_c = array_merge($w_r_1_g_1_a, $w_r_1_g_1_b);
$w_r_1_g_1 = $w_r_1_g_1_c[mt_rand(0, count($w_r_1_g_1_c) - 1)];

$w_r_1_g_2_a = array_fill(0, 13, $w_t_8);
$w_r_1_g_2_b = array_fill(0, 7, $w_t_9);
$w_r_1_g_2_c = array_merge($w_r_1_g_2_a, $w_r_1_g_2_b);
$w_r_1_g_2 = $w_r_1_g_2_c[mt_rand(0, count($w_r_1_g_2_c) - 1)];

$w_r_1_g_3_a = array_fill(0, 13, $w_t_5);
$w_r_1_g_3_b = array_fill(0, 7, $w_t_12);
$w_r_1_g_3_c = array_merge($w_r_1_g_3_a, $w_r_1_g_3_b);
$w_r_1_g_3 = $w_r_1_g_3_c[mt_rand(0, count($w_r_1_g_3_c) - 1)];

$w_r_1_g_4_a = array_fill(0, 16, $w_t_4);
$w_r_1_g_4_b = array_fill(0, 4, $w_t_13);
$w_r_1_g_4_c = array_merge($w_r_1_g_4_a, $w_r_1_g_4_b);
$w_r_1_g_4 = $w_r_1_g_4_c[mt_rand(0, count($w_r_1_g_4_c) - 1)];

$w_r_1_g_5_a = array_fill(0, 11, $w_t_6);
$w_r_1_g_5_b = array_fill(0, 9, $w_t_11);
$w_r_1_g_5_c = array_merge($w_r_1_g_5_a, $w_r_1_g_5_b);
$w_r_1_g_5 = $w_r_1_g_5_c[mt_rand(0, count($w_r_1_g_5_c) - 1)];

$w_r_1_g_6_a = array_fill(0, 19, $w_t_3);
$w_r_1_g_6_b = array_fill(0, 1, $w_t_14);
$w_r_1_g_6_c = array_merge($w_r_1_g_6_a, $w_r_1_g_6_b);
$w_r_1_g_6 = $w_r_1_g_6_c[mt_rand(0, count($w_r_1_g_6_c) - 1)];

$w_r_1_g_7_a = array_fill(0, 14, $w_t_7);
$w_r_1_g_7_b = array_fill(0, 6, $w_t_10);
$w_r_1_g_7_c = array_merge($w_r_1_g_7_a, $w_r_1_g_7_b);
$w_r_1_g_7 = $w_r_1_g_7_c[mt_rand(0, count($w_r_1_g_7_c) - 1)];

$w_r_1_g_8_a = array_fill(0, 18, $w_t_2);
$w_r_1_g_8_b = array_fill(0, 2, $w_t_15);
$w_r_1_g_8_c = array_merge($w_r_1_g_8_a, $w_r_1_g_8_b);
$w_r_1_g_8 = $w_r_1_g_8_c[mt_rand(0, count($w_r_1_g_8_c) - 1)];

$w_r_2_g_1_a = array_fill(0, 15, $w_r_1_g_1);
$w_r_2_g_1_b = array_fill(0, 5, $w_r_1_g_2);
$w_r_2_g_1_c = array_merge($w_r_2_g_1_a, $w_r_2_g_1_b);
$w_r_2_g_1 = $w_r_2_g_1_c[mt_rand(0, count($w_r_2_g_1_c) - 1)];

$w_r_2_g_2_a = array_fill(0, 9, $w_r_1_g_3);
$w_r_2_g_2_b = array_fill(0, 11, $w_r_1_g_4);
$w_r_2_g_2_c = array_merge($w_r_2_g_2_a, $w_r_2_g_2_b);
$w_r_2_g_2 = $w_r_2_g_2_c[mt_rand(0, count($w_r_2_g_2_c) - 1)];

$w_r_2_g_3_a = array_fill(0, 9, $w_r_1_g_5);
$w_r_2_g_3_b = array_fill(0, 11, $w_r_1_g_6);
$w_r_2_g_3_c = array_merge($w_r_2_g_3_a, $w_r_2_g_3_b);
$w_r_2_g_3 = $w_r_2_g_3_c[mt_rand(0, count($w_r_2_g_3_c) - 1)];

$w_r_2_g_4_a = array_fill(0, 8, $w_r_1_g_7);
$w_r_2_g_4_b = array_fill(0, 12, $w_r_1_g_8);
$w_r_2_g_4_c = array_merge($w_r_2_g_4_a, $w_r_2_g_4_b);
$w_r_2_g_4 = $w_r_2_g_4_c[mt_rand(0, count($w_r_2_g_4_c) - 1)];

$w_r_3_g_1_a = array_fill(0, 15, $w_r_2_g_1);
$w_r_3_g_1_b = array_fill(0, 5, $w_r_2_g_2);
$w_r_3_g_1_c = array_merge($w_r_3_g_1_a, $w_r_3_g_1_b);
$w_r_3_g_1 = $w_r_3_g_1_c[mt_rand(0, count($w_r_3_g_1_c) - 1)];

$w_r_3_g_2_a = array_fill(0, 7, $w_r_2_g_3);
$w_r_3_g_2_b = array_fill(0, 13, $w_r_2_g_4);
$w_r_3_g_2_c = array_merge($w_r_3_g_2_a, $w_r_3_g_2_b);
$w_r_3_g_2 = $w_r_3_g_2_c[mt_rand(0, count($w_r_3_g_2_c) - 1)];

$w_r_4_g_1_a = array_fill(0, 1, $w_r_3_g_1);
$w_r_4_g_1_b = array_fill(0, 1, $w_r_3_g_2);
$w_r_4_g_1_c = array_merge($w_r_4_g_1_a, $w_r_4_g_1_b);
$w_r_4_g_1 = $w_r_4_g_1_c[mt_rand(0, count($w_r_4_g_1_c) - 1)];

// EAST

$e_r_1_g_1_a = array_fill(0, 20, $e_t_1);
$e_r_1_g_1_b = array_fill(0, 1, $e_t_16);
$e_r_1_g_1_c = array_merge($e_r_1_g_1_a, $e_r_1_g_1_b);
$e_r_1_g_1 = $e_r_1_g_1_c[mt_rand(0, count($e_r_1_g_1_c) - 1)];

$e_r_1_g_2_a = array_fill(0, 13, $e_t_8);
$e_r_1_g_2_b = array_fill(0, 7, $e_t_9);
$e_r_1_g_2_c = array_merge($e_r_1_g_2_a, $e_r_1_g_2_b);
$e_r_1_g_2 = $e_r_1_g_2_c[mt_rand(0, count($e_r_1_g_2_c) - 1)];

$e_r_1_g_3_a = array_fill(0, 13, $e_t_5);
$e_r_1_g_3_b = array_fill(0, 7, $e_t_12);
$e_r_1_g_3_c = array_merge($e_r_1_g_3_a, $e_r_1_g_3_b);
$e_r_1_g_3 = $e_r_1_g_3_c[mt_rand(0, count($e_r_1_g_3_c) - 1)];

$e_r_1_g_4_a = array_fill(0, 16, $e_t_4);
$e_r_1_g_4_b = array_fill(0, 4, $e_t_13);
$e_r_1_g_4_c = array_merge($e_r_1_g_4_a, $e_r_1_g_4_b);
$e_r_1_g_4 = $e_r_1_g_4_c[mt_rand(0, count($e_r_1_g_4_c) - 1)];

$e_r_1_g_5_a = array_fill(0, 11, $e_t_6);
$e_r_1_g_5_b = array_fill(0, 9, $e_t_11);
$e_r_1_g_5_c = array_merge($e_r_1_g_5_a, $e_r_1_g_5_b);
$e_r_1_g_5 = $e_r_1_g_5_c[mt_rand(0, count($e_r_1_g_5_c) - 1)];

$e_r_1_g_6_a = array_fill(0, 19, $e_t_3);
$e_r_1_g_6_b = array_fill(0, 1, $e_t_14);
$e_r_1_g_6_c = array_merge($e_r_1_g_6_a, $e_r_1_g_6_b);
$e_r_1_g_6 = $e_r_1_g_6_c[mt_rand(0, count($e_r_1_g_6_c) - 1)];

$e_r_1_g_7_a = array_fill(0, 14, $e_t_7);
$e_r_1_g_7_b = array_fill(0, 6, $e_t_10);
$e_r_1_g_7_c = array_merge($e_r_1_g_7_a, $e_r_1_g_7_b);
$e_r_1_g_7 = $e_r_1_g_7_c[mt_rand(0, count($e_r_1_g_7_c) - 1)];

$e_r_1_g_8_a = array_fill(0, 18, $e_t_2);
$e_r_1_g_8_b = array_fill(0, 2, $e_t_15);
$e_r_1_g_8_c = array_merge($e_r_1_g_8_a, $e_r_1_g_8_b);
$e_r_1_g_8 = $e_r_1_g_8_c[mt_rand(0, count($e_r_1_g_8_c) - 1)];

$e_r_2_g_1_a = array_fill(0, 15, $e_r_1_g_1);
$e_r_2_g_1_b = array_fill(0, 5, $e_r_1_g_2);
$e_r_2_g_1_c = array_merge($e_r_2_g_1_a, $e_r_2_g_1_b);
$e_r_2_g_1 = $e_r_2_g_1_c[mt_rand(0, count($e_r_2_g_1_c) - 1)];

$e_r_2_g_2_a = array_fill(0, 9, $e_r_1_g_3);
$e_r_2_g_2_b = array_fill(0, 11, $e_r_1_g_4);
$e_r_2_g_2_c = array_merge($e_r_2_g_2_a, $e_r_2_g_2_b);
$e_r_2_g_2 = $e_r_2_g_2_c[mt_rand(0, count($e_r_2_g_2_c) - 1)];

$e_r_2_g_3_a = array_fill(0, 9, $e_r_1_g_5);
$e_r_2_g_3_b = array_fill(0, 11, $e_r_1_g_6);
$e_r_2_g_3_c = array_merge($e_r_2_g_3_a, $e_r_2_g_3_b);
$e_r_2_g_3 = $e_r_2_g_3_c[mt_rand(0, count($e_r_2_g_3_c) - 1)];

$e_r_2_g_4_a = array_fill(0, 8, $e_r_1_g_7);
$e_r_2_g_4_b = array_fill(0, 12, $e_r_1_g_8);
$e_r_2_g_4_c = array_merge($e_r_2_g_4_a, $e_r_2_g_4_b);
$e_r_2_g_4 = $e_r_2_g_4_c[mt_rand(0, count($e_r_2_g_4_c) - 1)];

$e_r_3_g_1_a = array_fill(0, 15, $e_r_2_g_1);
$e_r_3_g_1_b = array_fill(0, 5, $e_r_2_g_2);
$e_r_3_g_1_c = array_merge($e_r_3_g_1_a, $e_r_3_g_1_b);
$e_r_3_g_1 = $e_r_3_g_1_c[mt_rand(0, count($e_r_3_g_1_c) - 1)];

$e_r_3_g_2_a = array_fill(0, 7, $e_r_2_g_3);
$e_r_3_g_2_b = array_fill(0, 13, $e_r_2_g_4);
$e_r_3_g_2_c = array_merge($e_r_3_g_2_a, $e_r_3_g_2_b);
$e_r_3_g_2 = $e_r_3_g_2_c[mt_rand(0, count($e_r_3_g_2_c) - 1)];

$e_r_4_g_1_a = array_fill(0, 1, $e_r_3_g_1);
$e_r_4_g_1_b = array_fill(0, 1, $e_r_3_g_2);
$e_r_4_g_1_c = array_merge($e_r_4_g_1_a, $e_r_4_g_1_b);
$e_r_4_g_1 = $e_r_4_g_1_c[mt_rand(0, count($e_r_4_g_1_c) - 1)];

// MIDWEST

$mw_r_1_g_1_a = array_fill(0, 20, $mw_t_1);
$mw_r_1_g_1_b = array_fill(0, 1, $mw_t_16);
$mw_r_1_g_1_c = array_merge($mw_r_1_g_1_a, $mw_r_1_g_1_b);
$mw_r_1_g_1 = $mw_r_1_g_1_c[mt_rand(0, count($mw_r_1_g_1_c) - 1)];

$mw_r_1_g_2_a = array_fill(0, 13, $mw_t_8);
$mw_r_1_g_2_b = array_fill(0, 7, $mw_t_9);
$mw_r_1_g_2_c = array_merge($mw_r_1_g_2_a, $mw_r_1_g_2_b);
$mw_r_1_g_2 = $mw_r_1_g_2_c[mt_rand(0, count($mw_r_1_g_2_c) - 1)];

$mw_r_1_g_3_a = array_fill(0, 13, $mw_t_5);
$mw_r_1_g_3_b = array_fill(0, 7, $mw_t_12);
$mw_r_1_g_3_c = array_merge($mw_r_1_g_3_a, $mw_r_1_g_3_b);
$mw_r_1_g_3 = $mw_r_1_g_3_c[mt_rand(0, count($mw_r_1_g_3_c) - 1)];

$mw_r_1_g_4_a = array_fill(0, 16, $mw_t_4);
$mw_r_1_g_4_b = array_fill(0, 4, $mw_t_13);
$mw_r_1_g_4_c = array_merge($mw_r_1_g_4_a, $mw_r_1_g_4_b);
$mw_r_1_g_4 = $mw_r_1_g_4_c[mt_rand(0, count($mw_r_1_g_4_c) - 1)];

$mw_r_1_g_5_a = array_fill(0, 11, $mw_t_6);
$mw_r_1_g_5_b = array_fill(0, 9, $mw_t_11);
$mw_r_1_g_5_c = array_merge($mw_r_1_g_5_a, $mw_r_1_g_5_b);
$mw_r_1_g_5 = $mw_r_1_g_5_c[mt_rand(0, count($mw_r_1_g_5_c) - 1)];

$mw_r_1_g_6_a = array_fill(0, 19, $mw_t_3);
$mw_r_1_g_6_b = array_fill(0, 1, $mw_t_14);
$mw_r_1_g_6_c = array_merge($mw_r_1_g_6_a, $mw_r_1_g_6_b);
$mw_r_1_g_6 = $mw_r_1_g_6_c[mt_rand(0, count($mw_r_1_g_6_c) - 1)];

$mw_r_1_g_7_a = array_fill(0, 14, $mw_t_7);
$mw_r_1_g_7_b = array_fill(0, 6, $mw_t_10);
$mw_r_1_g_7_c = array_merge($mw_r_1_g_7_a, $mw_r_1_g_7_b);
$mw_r_1_g_7 = $mw_r_1_g_7_c[mt_rand(0, count($mw_r_1_g_7_c) - 1)];

$mw_r_1_g_8_a = array_fill(0, 18, $mw_t_2);
$mw_r_1_g_8_b = array_fill(0, 2, $mw_t_15);
$mw_r_1_g_8_c = array_merge($mw_r_1_g_8_a, $mw_r_1_g_8_b);
$mw_r_1_g_8 = $mw_r_1_g_8_c[mt_rand(0, count($mw_r_1_g_8_c) - 1)];

$mw_r_2_g_1_a = array_fill(0, 15, $mw_r_1_g_1);
$mw_r_2_g_1_b = array_fill(0, 5, $mw_r_1_g_2);
$mw_r_2_g_1_c = array_merge($mw_r_2_g_1_a, $mw_r_2_g_1_b);
$mw_r_2_g_1 = $mw_r_2_g_1_c[mt_rand(0, count($mw_r_2_g_1_c) - 1)];

$mw_r_2_g_2_a = array_fill(0, 9, $mw_r_1_g_3);
$mw_r_2_g_2_b = array_fill(0, 11, $mw_r_1_g_4);
$mw_r_2_g_2_c = array_merge($mw_r_2_g_2_a, $mw_r_2_g_2_b);
$mw_r_2_g_2 = $mw_r_2_g_2_c[mt_rand(0, count($mw_r_2_g_2_c) - 1)];

$mw_r_2_g_3_a = array_fill(0, 9, $mw_r_1_g_5);
$mw_r_2_g_3_b = array_fill(0, 11, $mw_r_1_g_6);
$mw_r_2_g_3_c = array_merge($mw_r_2_g_3_a, $mw_r_2_g_3_b);
$mw_r_2_g_3 = $mw_r_2_g_3_c[mt_rand(0, count($mw_r_2_g_3_c) - 1)];

$mw_r_2_g_4_a = array_fill(0, 8, $mw_r_1_g_7);
$mw_r_2_g_4_b = array_fill(0, 12, $mw_r_1_g_8);
$mw_r_2_g_4_c = array_merge($mw_r_2_g_4_a, $mw_r_2_g_4_b);
$mw_r_2_g_4 = $mw_r_2_g_4_c[mt_rand(0, count($mw_r_2_g_4_c) - 1)];

$mw_r_3_g_1_a = array_fill(0, 15, $mw_r_2_g_1);
$mw_r_3_g_1_b = array_fill(0, 5, $mw_r_2_g_2);
$mw_r_3_g_1_c = array_merge($mw_r_3_g_1_a, $mw_r_3_g_1_b);
$mw_r_3_g_1 = $mw_r_3_g_1_c[mt_rand(0, count($mw_r_3_g_1_c) - 1)];

$mw_r_3_g_2_a = array_fill(0, 7, $mw_r_2_g_3);
$mw_r_3_g_2_b = array_fill(0, 13, $mw_r_2_g_4);
$mw_r_3_g_2_c = array_merge($mw_r_3_g_2_a, $mw_r_3_g_2_b);
$mw_r_3_g_2 = $mw_r_3_g_2_c[mt_rand(0, count($mw_r_3_g_2_c) - 1)];

$mw_r_4_g_1_a = array_fill(0, 1, $mw_r_3_g_1);
$mw_r_4_g_1_b = array_fill(0, 1, $mw_r_3_g_2);
$mw_r_4_g_1_c = array_merge($mw_r_4_g_1_a, $mw_r_4_g_1_b);
$mw_r_4_g_1 = $mw_r_4_g_1_c[mt_rand(0, count($mw_r_4_g_1_c) - 1)];

// CHAMPIONSHIPS

$mwe_r_5_g_1_a = array_fill(0, 1, $mw_r_4_g_1);
$mwe_r_5_g_1_b = array_fill(0, 1, $e_r_4_g_1);
$mwe_r_5_g_1_c = array_merge($mwe_r_5_g_1_a, $mwe_r_5_g_1_b);
$mwe_r_5_g_1 = $mwe_r_5_g_1_c[mt_rand(0, count($mwe_r_5_g_1_c) - 1)];

$sw_r_5_g_1_a = array_fill(0, 1, $s_r_4_g_1);
$sw_r_5_g_1_b = array_fill(0, 1, $w_r_4_g_1);
$sw_r_5_g_1_c = array_merge($sw_r_5_g_1_a, $sw_r_5_g_1_b);
$sw_r_5_g_1 = $sw_r_5_g_1_c[mt_rand(0, count($sw_r_5_g_1_c) - 1)];

$mwesw_r_6_g_1_a = array_fill(0, 1, $mwe_r_5_g_1);
$mwesw_r_6_g_1_b = array_fill(0, 1, $sw_r_5_g_1);
$mwesw_r_6_g_1_c = array_merge($mwesw_r_6_g_1_a, $mwesw_r_6_g_1_b);
$mwesw_r_6_g_1 = $mwesw_r_6_g_1_c[mt_rand(0, count($mwesw_r_6_g_1_c) - 1)];


// SHOW RESULTS
?>
<head>
 <style>
  	body {
		background-color: #fff;
		font-family: 'Helvetica Neue', Helvetica, Arial, FreeSans, sans-serif;
		margin: 0;
	}
	section {
	  margin: 0 8px;
	}
	.tournament {
	    display: flex;
	    flex-direction: row;
	}
	.tournament .round {
	  font-size: .5em;
	  display: flex;
	  flex-direction: column;
	  justify-content: center;
	  /* experimental */
	  white-space: nowrap;
	  overflow: hidden;
	  text-overflow: ellipsis;
	  /* experimental */
	  width: 200px;
	  list-style: none;
	  padding: 0;
	}
	.tournament .round .spacer {
	  flex-grow: 2;
	}
	.tournament .round .spacer:first-child,
	.tournament .round .spacer:last-child {
	  flex-grow: 1;
	}

	.tournament-header {
	  margin-top: 1em;
	  text-align: center;
	  font-weight: bold;
	  background-color: #cbf0fa;
	  color: #000;
	}
	.round-1 li.game-left,
	.round-2 li.game-left,
	.round-3 li.game-left,
	.round-4 li.game-left,
	.semi-final li.game-left {
		padding-left: 0.5em;
	}

	.round-1 li.game-right,
	.round-2 li.game-right,
	.round-3 li.game-right,
	.round-4 li.game-right,
	.semi-final li.game-right {
		padding-right: 0.5em;
	}

	.region {
	    font-size: 1em;
	    font-weight:bold;
	}
	.region-right {
	    text-align:right;
	  padding-right: 5px;
	}
	.region-left {
	    text-align:left;
	  padding-left: 5px;
	}

	ul.seed li.game-left span:first-child,
	ul.seed li.game-right span:last-child {
	    font-size: 0.5em;
	}

	li.game-right {
	  text-align: right;
	  border-left: 1px solid #aaa;
	}
	li.game-left {
	    border-right: 1px solid #aaa;
	}
	li.game-bottom {
	  border-bottom: 1px solid #aaa;
	}
	li.game-top {
	  border: none;
	  border-bottom: 1px solid #aaa;
	}
	li.game-left.spacer {
	    border-right: 1px solid #aaa;
	    min-height: 5px;
	    padding-right:.25em;
	}
	li.game-right.spacer {
	    border-left: 1px solid #aaa;
	    min-height: 5px;
	    padding-left:.25em;
	    text-align: left;
	}

	.final {
	    text-align: center;
	    padding-top: 1em;
	    padding-bottom: 1em;
	    border: 1px solid #aaa;
	    margin-top: 1em;
	    margin-bottom: 1em;
	    font-weight:bold;
	}
	.finals .centered {
	    text-align:center;
	    font-weight:bold;
	}
	.finals .centered > input {
	    display:block;
	    width:4em;
	    margin: 0 auto 0 auto;
	    text-align:center;
	}

	.body-first-child {
	  margin-top: -45px;
	}
	.extra-padding {
	  padding-top: 45px;
	}
	.intro p {
		font-size: .3em;
		padding-top: 1em;
		text-align: center;
	}
	@media print {
		.intro {
			display: none;
		}
		.tournament-header {
			margin-top: 0;
		}
		.tournament .round {
			font-size: 0.5em;
			margin: 0;
		}
	}
	@media (min-width: 800px) {
		.intro p {
			font-size: 1em;
		}
		.tournament .round {
			font-size: .75em;
			white-space: normal;
			overflow: visible;
			text-overflow: clip;
		}
		.region {
			font-size: 1.5em;
		}
	}
  </style>
  <title>Jeff's Random Bracket Generator - <?php echo date("Y"); ?></title>
</head>
  <section>
  	<div class="intro">
  		<p>Generate a random bracket for the upcoming men's basketball tournament. Refresh to generate a new random bracket. Prints better in landscape. <a href="https://github.com/jefe317/bracket">PHP</a> by <a href="https://twitter.com/jefftml">@jefftml</a>. CSS by <a href="https://codepen.io/kenielsen/pen/aVYJLX">Kristen Nielsen</a>.</p>
  	</div>
    <div class='tournament tournament-header'>
      <ul class='round'>
        <li>First Round</li>
        <li>Mar 16-18</li>
      </ul>
      <ul class='round'>
        <li>Second Round</li>
        <li>Mar 17-19</li>
      </ul>
      <ul class='round'>
        <li>Sweet 16</li>
        <li>Mar 23-25</li>
      </ul>
      <ul class='round'>
        <li>Elite 8</li>
        <li>Mar 24-26</li>
      </ul>
      <ul class='round'>
        <li>Final 4</li>
        <li>Apr 1</li>
      </ul>
      <ul class='round'>
      </ul>
      <ul class='round'>
        <li>National Championship</li>
        <li>Apr 3</li>
      </ul>
      <ul class='round'>
      </ul>
      <ul class='round'>
        <li>Final 4</li>
        <li>Apr 1</li>
      </ul>
      <ul class='round'>
        <li>Elite 8</li>
        <li>Mar 24-26</li>
      </ul>
      <ul class='round'>
        <li>Sweet 16</li>
        <li>Mar 23-25</li>
      </ul>
      <ul class='round'>
        <li>Second Round</li>
        <li>Mar 17-19</li>
      </ul>
      <ul class='round'>
        <li>First Round</li>
        <li>Mar 16-18</li>
      </ul>
    </div>
    <div class='tournament'>
      <ul class='round seed'>
      	<!-- SOUTH -->
        <li class='spacer'>&nbsp;</li>
        <li class='game-left game-top'>
          <?php echo $s_t_1; ?>
        </li>
        <li class='game-left game-bottom'>
          <?php echo $s_t_16; ?>
        </li>
        <li class='spacer'>&nbsp;</li>
        <li class='game-left game-top'>
          <?php echo $s_t_8; ?>
        </li>
        <li class='game-left game-bottom'>
          <?php echo $s_t_9; ?>
        </li>
        <li class='spacer'>&nbsp;</li>
        <li class='game-left game-top'>
          <?php echo $s_t_5; ?>
        </li>
        <li class='game-left game-bottom'>
          <?php echo $s_t_12; ?>
        </li>
        <li class='spacer'>&nbsp;</li>
        <li class='game-left game-top'>
          <?php echo $s_t_4; ?>
        </li>
        <li class='game-left game-bottom'>
          <?php echo $s_t_13; ?>
        </li>
        <li class='spacer'>&nbsp;</li>
        <li class='game-left game-top'>
          <?php echo $s_t_6; ?>
        </li>
        <li class='game-left game-bottom'>
          <?php echo $s_t_11; ?>
        </li>
        <li class='spacer'>&nbsp;</li>
        <li class='game-left game-top'>
          <?php echo $s_t_3; ?>
        </li>
        <li class='game-left game-bottom'>
          <?php echo $s_t_14; ?>
        </li>
        <li class='spacer'>&nbsp;</li>
        <li class='game-left game-top'>
          <?php echo $s_t_7; ?>
        </li>
        <li class='game-left game-bottom'>
          <?php echo $s_t_10; ?>
        </li>
        <li class='spacer'>&nbsp;</li>
        <li class='game-left game-top'>
          <?php echo $s_t_2; ?>
        </li>
        <li class='game-left game-bottom'>
          <?php echo $s_t_15; ?>
        </li>
        <li class='spacer'>&nbsp;</li>
        <!-- WEST -->
        <li class='game-left game-top'>
          <?php echo $w_t_1; ?>
        </li>
        <li class='game-left game-bottom'>
          <?php echo $w_t_16; ?>
        </li>
        <li class='spacer'>&nbsp;</li>
        <li class='game-left game-top'>
          <?php echo $w_t_8; ?>
        </li>
        <li class='game-left game-bottom'>
          <?php echo $w_t_9; ?>
        </li>
        <li class='spacer'>&nbsp;</li>
        <li class='game-left game-top'>
          <?php echo $w_t_5; ?>
        </li>
        <li class='game-left game-bottom'>
          <?php echo $w_t_12; ?>
        </li>
        <li class='spacer'>&nbsp;</li>
        <li class='game-left game-top'>
          <?php echo $w_t_4; ?>
        </li>
        <li class='game-left game-bottom'>
          <?php echo $w_t_13; ?>
        </li>
        <li class='spacer'>&nbsp;</li>
        <li class='game-left game-top'>
          <?php echo $w_t_6; ?>
        </li>
        <li class='game-left game-bottom'>
          <?php echo $w_t_11; ?>
        </li>
        <li class='spacer'>&nbsp;</li>
        <li class='game-left game-top'>
          <?php echo $w_t_3; ?>
        </li>
        <li class='game-left game-bottom'>
          <?php echo $w_t_14; ?>
        </li>
        <li class='spacer'>&nbsp;</li>
        <li class='game-left game-top'>
          <?php echo $w_t_7; ?>
        </li>
        <li class='game-left game-bottom'>
          <?php echo $w_t_10; ?>
        </li>
        <li class='spacer'>&nbsp;</li>
        <li class='game-left game-top'>
          <?php echo $w_t_2; ?>
        </li>
        <li class='game-left game-bottom'>
          <?php echo $w_t_15; ?>
        </li>
        <li class='spacer'>&nbsp;</li>
      </ul>
      <ul class='round round-1'>
      	<!-- South -->
        <li class='spacer'>&nbsp;</li>
        <li class='game-left game-top'><?php echo $s_r_1_g_1; ?></li>
        <li class='game-left spacer'>&nbsp;</li>
        <li class='game-left game-bottom'><?php echo $s_r_1_g_2; ?></li>
        <li class='spacer'>&nbsp;</li>
        <li class='game-left game-top'><?php echo $s_r_1_g_3; ?></li>
        <li class='game-left spacer'>&nbsp;</li>
        <li class='game-left game-bottom'><?php echo $s_r_1_g_4; ?></li>
        <li class='spacer'>&nbsp;</li>
        <li class='game-left game-top'><?php echo $s_r_1_g_5; ?></li>
        <li class='game-left spacer'>&nbsp;</li>
        <li class='game-left game-bottom'><?php echo $s_r_1_g_6; ?></li>
        <li class='spacer'>&nbsp;</li>
        <li class='game-left game-top'><?php echo $s_r_1_g_7; ?></li>
        <li class='game-left spacer'>&nbsp;</li>
        <li class='game-left game-bottom'><?php echo $s_r_1_g_8; ?></li>
        <!-- West -->
        <li class='spacer'>&nbsp;</li>
        <li class='game-left game-top'><?php echo $w_r_1_g_1; ?></li>
        <li class='game-left spacer'>&nbsp;</li>
        <li class='game-left game-bottom'><?php echo $w_r_1_g_2; ?></li>
        <li class='spacer'>&nbsp;</li>
        <li class='game-left game-top'><?php echo $w_r_1_g_3; ?></li>
        <li class='game-left spacer'>&nbsp;</li>
        <li class='game-left game-bottom'><?php echo $w_r_1_g_4; ?></li>
        <li class='spacer'>&nbsp;</li>
        <li class='game-left game-top'><?php echo $w_r_1_g_5; ?></li>
        <li class='game-left spacer'>&nbsp;</li>
        <li class='game-left game-bottom'><?php echo $w_r_1_g_6; ?></li>
        <li class='spacer'>&nbsp;</li>
        <li class='game-left game-top'><?php echo $w_r_1_g_7; ?></li>
        <li class='game-left spacer'>&nbsp;</li>
        <li class='game-left game-bottom'><?php echo $w_r_1_g_8; ?></li>
        <li class='spacer'>&nbsp;</li>
      </ul>
      <ul class='round round-2'>
      	<!-- South -->
        <li class='spacer'>&nbsp;</li>
        <li class='game-left game-top'><?php echo $s_r_2_g_1; ?></li>
        <li class='game-left spacer'>&nbsp;</li>
        <li class='game-left game-bottom'><?php echo $s_r_2_g_2; ?></li>
        <li class='spacer'>&nbsp;</li>
        <li class='game-left game-top'><?php echo $s_r_2_g_3; ?></li>
        <li class='game-left spacer'>&nbsp;</li>
        <li class='game-left game-bottom'><?php echo $s_r_2_g_4; ?></li>
        <!-- West -->
        <li class='spacer'>&nbsp;</li>
        <li class='game-left game-top'><?php echo $w_r_2_g_1; ?></li>
        <li class='game-left spacer'>&nbsp;</li>
        <li class='game-left game-bottom'><?php echo $w_r_2_g_2; ?></li>
        <li class='spacer'>&nbsp;</li>
        <li class='game-left game-top'><?php echo $w_r_2_g_3; ?></li>
        <li class='game-left spacer'>&nbsp;</li>
        <li class='game-left game-bottom'><?php echo $w_r_2_g_4; ?></li>
        <li class='spacer'>&nbsp;</li>
      </ul>
      <ul class='round round-3'>
      	<!-- South -->
        <li class='spacer'>&nbsp;</li>
        <li class='game-left game-top'><?php echo $s_r_3_g_1; ?></li>
        <li class='game-left spacer region region-right'>South</li>
        <li class='game-left game-bottom'><?php echo $s_r_3_g_2; ?></li>
        <li class='spacer'>&nbsp;</li>
        <!-- West -->
        <li class='game-left game-top'><?php echo $w_r_3_g_1; ?></li>
        <li class='game-left spacer region region-right'>West</li>
        <li class='game-left game-bottom'><?php echo $w_r_3_g_2; ?></li>
        <li class='spacer'>&nbsp;</li>
      </ul>
      <ul class='round round-4'>
        <li class='spacer'>&nbsp;</li>
        <!-- South -->
        <li class='game-left game-top'><?php echo $s_r_4_g_1; ?></li>
        <li class='game-left spacer'>&nbsp;</li>
        <!-- West -->
        <li class='game-left game-bottom'><?php echo $w_r_4_g_1; ?></li>
        <li class='spacer'>&nbsp;</li>
      </ul>
      <ul class='round semi-final'>
        <li class='spacer'>&nbsp;</li>
        <li class='game-left game-top'><?php echo $sw_r_5_g_1; ?></li>
        <li class='spacer'>&nbsp;</li>
      </ul>
      <ul class='round finals'>
        <li class='spacer'>&nbsp;</li>
        <li class='game final'><?php echo $mwesw_r_6_g_1; ?></li>
        <li class='spacer'>&nbsp;</li>
      </ul>
      <ul class='round semi-final'>
        <li class='spacer'>&nbsp;</li>
        <li class='game-right game-top'><?php echo $mwe_r_5_g_1; ?></li>
        <li class='spacer'>&nbsp;</li>
      </ul>
      <ul class='round round-4'>
        <li class='spacer'>&nbsp;</li>
        <li class='game-right game-top'><?php echo $e_r_4_g_1; ?></li>
        <li class='game-right spacer'>&nbsp;</li>
        <li class='game-right game-bottom'><?php echo $mw_r_4_g_1; ?></li>
        <li class='spacer'>&nbsp;</li>
      </ul>
      <ul class='round round-3'>
      	<!-- East -->
        <li class='spacer'>&nbsp;</li>
        <li class='game-right game-top'><?php echo $e_r_3_g_1; ?></li>
        <li class='game-right spacer region region-left'>East</li>
        <li class='game-right game-bottom'><?php echo $e_r_3_g_2; ?></li>
        <li class='spacer'>&nbsp;</li>
        <!-- Midwest -->
        <li class='game-right game-top'><?php echo $mw_r_3_g_1; ?></li>
        <li class='game-right spacer region region-left'>Midwest</li>
        <li class='game-right game-bottom'><?php echo $mw_r_3_g_2; ?></li>
        <li class='spacer'>&nbsp;</li>
      </ul>
      <ul class='round round-2'>
      	<!-- East -->
        <li class='spacer'>&nbsp;</li>
        <li class='game-right game-top'><?php echo $e_r_2_g_1; ?></li>
        <li class='game-right spacer'>&nbsp;</li>
        <li class='game-right game-bottom'><?php echo $e_r_2_g_2; ?></li>
        <li class='spacer'>&nbsp;</li>
        <li class='game-right game-top'><?php echo $e_r_2_g_3; ?></li>
        <li class='game-right spacer'>&nbsp;</li>
        <li class='game-right game-bottom'><?php echo $e_r_2_g_4; ?></li>
        <li class='spacer'>&nbsp;</li>
        <!-- Midwest -->
        <li class='game-right game-top'><?php echo $mw_r_2_g_1; ?></li>
        <li class='game-right spacer'>&nbsp;</li>
        <li class='game-right game-bottom'><?php echo $mw_r_2_g_2; ?></li>
        <li class='spacer'>&nbsp;</li>
        <li class='game-right game-top'><?php echo $mw_r_2_g_3; ?></li>
        <li class='game-right spacer'>&nbsp;</li>
        <li class='game-right game-bottom'><?php echo $mw_r_2_g_4; ?></li>
        <li class='spacer'>&nbsp;</li>
      </ul>
      <ul class='round round-1'>
      	<!-- East -->
        <li class='spacer'>&nbsp;</li>
        <li class='game-right game-top'><?php echo $e_r_1_g_1; ?></li>
        <li class='game-right spacer'>&nbsp;</li>
        <li class='game-right game-bottom'><?php echo $e_r_1_g_2; ?></li>
        <li class='spacer'>&nbsp;</li>
        <li class='game-right game-top'><?php echo $e_r_1_g_3; ?></li>
        <li class='game-right spacer'>&nbsp;</li>
        <li class='game-right game-bottom'><?php echo $e_r_1_g_4; ?></li>
        <li class='spacer'>&nbsp;</li>
        <li class='game-right game-top'><?php echo $e_r_1_g_5; ?></li>
        <li class='game-right spacer'>&nbsp;</li>
        <li class='game-right game-bottom'><?php echo $e_r_1_g_6; ?></li>
        <li class='spacer'>&nbsp;</li>
        <li class='game-right game-top'><?php echo $e_r_1_g_7; ?></li>
        <li class='game-right spacer'>&nbsp;</li>
        <li class='game-right game-bottom'><?php echo $e_r_1_g_8; ?></li>
        <li class='spacer'>&nbsp;</li>
        <!-- Midwest -->
        <li class='game-right game-top'><?php echo $mw_r_1_g_1; ?></li>
        <li class='game-right spacer'>&nbsp;</li>
        <li class='game-right game-bottom'><?php echo $mw_r_1_g_2; ?></li>
        <li class='spacer'>&nbsp;</li>
        <li class='game-right game-top'><?php echo $mw_r_1_g_3; ?></li>
        <li class='game-right spacer'>&nbsp;</li>
        <li class='game-right game-bottom'><?php echo $mw_r_1_g_4; ?></li>
        <li class='spacer'>&nbsp;</li>
        <li class='game-right game-top'><?php echo $mw_r_1_g_5; ?></li>
        <li class='game-right spacer'>&nbsp;</li>
        <li class='game-right game-bottom'><?php echo $mw_r_1_g_6; ?></li>
        <li class='spacer'>&nbsp;</li>
        <li class='game-right game-top'><?php echo $mw_r_1_g_7; ?></li>
        <li class='game-right spacer'>&nbsp;</li>
        <li class='game-right game-bottom'><?php echo $mw_r_1_g_8; ?></li>
        <li class='spacer'>&nbsp;</li>
      </ul>
      <ul class='round seed'>
        <!-- East -->
        <li class='spacer'>&nbsp;</li>
        <li class='game-right game-top'>
          <?php echo $e_t_1; ?>
        </li>
        <li class='game-right game-bottom'>
          <?php echo $e_t_16; ?>
        </li>
        <li class='spacer'>&nbsp;</li>
        <li class='game-right game-top'>
          <?php echo $e_t_8; ?>
        </li>
        <li class='game-right game-bottom'>
          <?php echo $e_t_9; ?>
        </li>
        <li class='spacer'>&nbsp;</li>
        <li class='game-right game-top'>
          <?php echo $e_t_5; ?>
        </li>
        <li class='game-right game-bottom'>
          <?php echo $e_t_12; ?>
        </li>
        <li class='spacer'>&nbsp;</li>
        <li class='game-right game-top'>
          <?php echo $e_t_4; ?>
        </li>
        <li class='game-right game-bottom'>
          <?php echo $e_t_13; ?>
        </li>
        <li class='spacer'>&nbsp;</li>
        <li class='game-right game-top'>
          <?php echo $e_t_6; ?>
        </li>
        <li class='game-right game-bottom'>
          <?php echo $e_t_11; ?>
        </li>
        <li class='spacer'>&nbsp;</li>
        <li class='game-right game-top'>
          <?php echo $e_t_3; ?>
        </li>
        <li class='game-right game-bottom'>
          <?php echo $e_t_14; ?>
        </li>
        <li class='spacer'>&nbsp;</li>
        <li class='game-right game-top'>
          <?php echo $e_t_7; ?>
        </li>
        <li class='game-right game-bottom'>
          <?php echo $e_t_10; ?>
        </li>
        <li class='spacer'>&nbsp;</li>
        <li class='game-right game-top'>
          <?php echo $e_t_2; ?>
        </li>
        <li class='game-right game-bottom'>
          <?php echo $e_t_15; ?>
        </li>
        <li class='spacer'>&nbsp;</li>
        <!-- Midwest -->
        <li class='game-right game-top'>
          <?php echo $mw_t_1; ?>
        </li>
        <li class='game-right game-bottom'>
          <?php echo $mw_t_16; ?>
        </li>
        <li class='spacer'>&nbsp;</li>
        <li class='game-right game-top'>
          <?php echo $mw_t_8; ?>
        </li>
        <li class='game-right game-bottom'>
          <?php echo $mw_t_9; ?>
        </li>
        <li class='spacer'>&nbsp;</li>
        <li class='game-right game-top'>
          <?php echo $mw_t_5; ?>
        </li>
        <li class='game-right game-bottom'>
          <?php echo $mw_t_12; ?>
        </li>
        <li class='spacer'>&nbsp;</li>
        <li class='game-right game-top'>
          <?php echo $mw_t_4; ?>
        </li>
        <li class='game-right game-bottom'>
          <?php echo $mw_t_13; ?>
        </li>
        <li class='spacer'>&nbsp;</li>
        <li class='game-right game-top'>
          <?php echo $mw_t_6; ?>
        </li>
        <li class='game-right game-bottom'>
          <?php echo $mw_t_11; ?>
        </li>
        <li class='spacer'>&nbsp;</li>
        <li class='game-right game-top'>
          <?php echo $mw_t_3; ?>
        </li>
        <li class='game-right game-bottom'>
          <?php echo $mw_t_14; ?>
        </li>
        <li class='spacer'>&nbsp;</li>
        <li class='game-right game-top'>
          <?php echo $mw_t_7; ?>
        </li>
        <li class='game-right game-bottom'>
          <?php echo $mw_t_10; ?>
        </li>
        <li class='spacer'>&nbsp;</li>
        <li class='game-right game-top'>
          <?php echo $mw_t_2; ?>
        </li>
        <li class='game-right game-bottom'>
          <?php echo $mw_t_15; ?>
        </li>
        <li class='spacer'>&nbsp;</li>
      </ul>
    </div>
  </section>
</body>
</html>