<?php

function postGitIssue(array $args) {
    
    extract($args);
    
    $header = [
        'Content-Type: application/json',
        'Authorization: token '.$token
    ];
    
    // RETURNTRANSFER exec時に結果出力を回避
	$options = array(
        CURLOPT_URL => $repo,
        CURLOPT_HTTPHEADER => $header,
        CURLOPT_POSTFIELDS => $issue,
        CURLOPT_USERAGENT => $ua,
        CURLOPT_RETURNTRANSFER => true
	);
        
	$ch = curl_init();
    
	curl_setopt_array($ch, $options);
	$res = curl_exec($ch);
	curl_close($ch);
	return $res;
}



$gitUser = "kensukegoto";
$gitRepo = "tenki";
$titIssue = "問題発見77！";
$titBody = "こんな問題がありました2！";

$token = "d65d3a87c242b961f81fc868833e543d8a0e8269";

$repo = "https://api.github.com/repos/{$gitUser}/{$gitRepo}/issues";


$issue = json_encode(
    array(
        "title"=>$titIssue,
        "body"=>$titBody
    ),
    JSON_PRETTY_PRINT);

$args = array(
    "repo" => $repo,
    "issue" => $issue,
    "ua" => $gitUser,
    "token"=> $token
);

// 失敗時 false
$res = postGitIssue($args);

var_dump($res);
?>