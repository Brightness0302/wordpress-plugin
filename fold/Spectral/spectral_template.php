<?php
$client_name = get_option('xve_client_name');
$client_phone = get_option('xve_client_phone');
$client_email = get_option('xve_client_email');
$client_address = get_option('xve_client_address');
$client_city = get_option('xve_client_city');
$logo = get_option('xve_logo');
$primary_color = get_option('xve_primary_color', '#dc8100');
$accent_color = get_option('xve_accent_color', '#333333');
?>
<!DOCTYPE html>
<!-- saved from url=(0043)https://html5up.net/uploads/demos/spectral/ -->
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title><?php echo esc_html($client_name); ?> - Onder Constructie</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<style>
        @import url("https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,800,800italic");

        /*
            Spectral by HTML5 UP
            html5up.net | @ajlkn
            Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
        */

        html,
        body,
        div,
        span,
        applet,
        object,
        iframe,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p,
        blockquote,
        pre,
        a,
        abbr,
        acronym,
        address,
        big,
        cite,
        code,
        del,
        dfn,
        em,
        img,
        ins,
        kbd,
        q,
        s,
        samp,
        small,
        strike,
        strong,
        sub,
        sup,
        tt,
        var,
        b,
        u,
        i,
        center,
        dl,
        dt,
        dd,
        ol,
        ul,
        li,
        fieldset,
        form,
        label,
        legend,
        table,
        caption,
        tbody,
        tfoot,
        thead,
        tr,
        th,
        td,
        article,
        aside,
        canvas,
        details,
        embed,
        figure,
        figcaption,
        footer,
        header,
        hgroup,
        menu,
        nav,
        output,
        ruby,
        section,
        summary,
        time,
        mark,
        audio,
        video {
        margin: 0;
        padding: 0;
        border: 0;
        font-size: 100%;
        font: inherit;
        vertical-align: baseline;
        }

        article,
        aside,
        details,
        figcaption,
        figure,
        footer,
        header,
        hgroup,
        menu,
        nav,
        section {
        display: block;
        }

        body {
        line-height: 1;
        }

        ol,
        ul {
        list-style: none;
        }

        blockquote,
        q {
        quotes: none;
        }

        blockquote:before,
        blockquote:after,
        q:before,
        q:after {
        content: "";
        content: none;
        }

        table {
        border-collapse: collapse;
        border-spacing: 0;
        }

        body {
        -webkit-text-size-adjust: none;
        }

        mark {
        background-color: transparent;
        color: inherit;
        }

        input::-moz-focus-inner {
        border: 0;
        padding: 0;
        }

        input,
        select,
        textarea {
        -moz-appearance: none;
        -webkit-appearance: none;
        -ms-appearance: none;
        appearance: none;
        }

        /* Basic */

        @-ms-viewport {
        width: device-width;
        }

        html {
        box-sizing: border-box;
        }

        *,
        *:before,
        *:after {
        box-sizing: inherit;
        }

        body {
        background: #2e3842;
        }

        body.is-preload *,
        body.is-preload *:before,
        body.is-preload *:after {
        -moz-animation: none !important;
        -webkit-animation: none !important;
        -ms-animation: none !important;
        animation: none !important;
        -moz-transition: none !important;
        -webkit-transition: none !important;
        -ms-transition: none !important;
        transition: none !important;
        }

        body,
        input,
        select,
        textarea {
        color: #fff;
        font-family: "Open Sans", Helvetica, sans-serif;
        font-size: 15pt;
        font-weight: 400;
        letter-spacing: 0.075em;
        line-height: 1.65em;
        }

        @media screen and (max-width: 1680px) {
        body,
        input,
        select,
        textarea {
            font-size: 13pt;
        }
        }

        @media screen and (max-width: 1280px) {
        body,
        input,
        select,
        textarea {
            font-size: 12pt;
        }
        }

        @media screen and (max-width: 736px) {
        body,
        input,
        select,
        textarea {
            font-size: 11pt;
            letter-spacing: 0.0375em;
        }
        }

        a {
        -moz-transition: color 0.2s ease, border-bottom-color 0.2s ease;
        -webkit-transition: color 0.2s ease, border-bottom-color 0.2s ease;
        -ms-transition: color 0.2s ease, border-bottom-color 0.2s ease;
        transition: color 0.2s ease, border-bottom-color 0.2s ease;
        border-bottom: dotted 1px;
        color: inherit;
        text-decoration: none;
        }

        a:hover {
        border-bottom-color: transparent;
        }

        strong,
        b {
        color: #fff;
        font-weight: 600;
        }

        em,
        i {
        font-style: italic;
        }

        p {
        margin: 0 0 2em 0;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
        color: #fff;
        font-weight: 800;
        letter-spacing: 0.225em;
        line-height: 1em;
        margin: 0 0 1em 0;
        text-transform: uppercase;
        }

        h1 a,
        h2 a,
        h3 a,
        h4 a,
        h5 a,
        h6 a {
        color: inherit;
        text-decoration: none;
        }

        h2 {
        font-size: 1.35em;
        line-height: 1.75em;
        }

        @media screen and (max-width: 736px) {
        h2 {
            font-size: 1.1em;
            line-height: 1.65em;
        }
        }

        h3 {
        font-size: 1.15em;
        line-height: 1.75em;
        }

        @media screen and (max-width: 736px) {
        h3 {
            font-size: 1em;
            line-height: 1.65em;
        }
        }

        h4 {
        font-size: 1em;
        line-height: 1.5em;
        }

        h5 {
        font-size: 0.8em;
        line-height: 1.5em;
        }

        h6 {
        font-size: 0.7em;
        line-height: 1.5em;
        }

        sub {
        font-size: 0.8em;
        position: relative;
        top: 0.5em;
        }

        sup {
        font-size: 0.8em;
        position: relative;
        top: -0.5em;
        }

        hr {
        border: 0;
        border-bottom: solid 2px #fff;
        margin: 3em 0;
        }

        hr.major {
        margin: 4.5em 0;
        }

        blockquote {
        border-left: solid 4px #fff;
        font-style: italic;
        margin: 0 0 2em 0;
        padding: 0.5em 0 0.5em 2em;
        }

        code {
        background: rgba(144, 144, 144, 0.25);
        border-radius: 3px;
        font-family: "Courier New", monospace;
        font-size: 0.9em;
        letter-spacing: 0;
        margin: 0 0.25em;
        padding: 0.25em 0.65em;
        }

        pre {
        -webkit-overflow-scrolling: touch;
        font-family: "Courier New", monospace;
        font-size: 0.9em;
        margin: 0 0 2em 0;
        }

        pre code {
        display: block;
        line-height: 1.75em;
        padding: 1em 1.5em;
        overflow-x: auto;
        }

        .align-left {
        text-align: left;
        }

        .align-center {
        text-align: center;
        }

        .align-right {
        text-align: right;
        }

        /* Row */

        .row {
        display: flex;
        flex-wrap: wrap;
        box-sizing: border-box;
        align-items: stretch;
        }

        .row > * {
        box-sizing: border-box;
        }

        .row.gtr-uniform > * > :last-child {
        margin-bottom: 0;
        }

        .row.aln-left {
        justify-content: flex-start;
        }

        .row.aln-center {
        justify-content: center;
        }

        .row.aln-right {
        justify-content: flex-end;
        }

        .row.aln-top {
        align-items: flex-start;
        }

        .row.aln-middle {
        align-items: center;
        }

        .row.aln-bottom {
        align-items: flex-end;
        }

        .row > .imp {
        order: -1;
        }

        .row > .col-1 {
        width: 8.33333%;
        }

        .row > .off-1 {
        margin-left: 8.33333%;
        }

        .row > .col-2 {
        width: 16.66667%;
        }

        .row > .off-2 {
        margin-left: 16.66667%;
        }

        .row > .col-3 {
        width: 25%;
        }

        .row > .off-3 {
        margin-left: 25%;
        }

        .row > .col-4 {
        width: 33.33333%;
        }

        .row > .off-4 {
        margin-left: 33.33333%;
        }

        .row > .col-5 {
        width: 41.66667%;
        }

        .row > .off-5 {
        margin-left: 41.66667%;
        }

        .row > .col-6 {
        width: 50%;
        }

        .row > .off-6 {
        margin-left: 50%;
        }

        .row > .col-7 {
        width: 58.33333%;
        }

        .row > .off-7 {
        margin-left: 58.33333%;
        }

        .row > .col-8 {
        width: 66.66667%;
        }

        .row > .off-8 {
        margin-left: 66.66667%;
        }

        .row > .col-9 {
        width: 75%;
        }

        .row > .off-9 {
        margin-left: 75%;
        }

        .row > .col-10 {
        width: 83.33333%;
        }

        .row > .off-10 {
        margin-left: 83.33333%;
        }

        .row > .col-11 {
        width: 91.66667%;
        }

        .row > .off-11 {
        margin-left: 91.66667%;
        }

        .row > .col-12 {
        width: 100%;
        }

        .row > .off-12 {
        margin-left: 100%;
        }

        .row.gtr-0 {
        margin-top: 0;
        margin-left: 0em;
        }

        .row.gtr-0 > * {
        padding: 0 0 0 0em;
        }

        .row.gtr-0.gtr-uniform {
        margin-top: 0em;
        }

        .row.gtr-0.gtr-uniform > * {
        padding-top: 0em;
        }

        .row.gtr-25 {
        margin-top: 0;
        margin-left: -0.375em;
        }

        .row.gtr-25 > * {
        padding: 0 0 0 0.375em;
        }

        .row.gtr-25.gtr-uniform {
        margin-top: -0.375em;
        }

        .row.gtr-25.gtr-uniform > * {
        padding-top: 0.375em;
        }

        .row.gtr-50 {
        margin-top: 0;
        margin-left: -0.75em;
        }

        .row.gtr-50 > * {
        padding: 0 0 0 0.75em;
        }

        .row.gtr-50.gtr-uniform {
        margin-top: -0.75em;
        }

        .row.gtr-50.gtr-uniform > * {
        padding-top: 0.75em;
        }

        .row {
        margin-top: 0;
        margin-left: -1.5em;
        }

        .row > * {
        padding: 0 0 0 1.5em;
        }

        .row.gtr-uniform {
        margin-top: -1.5em;
        }

        .row.gtr-uniform > * {
        padding-top: 1.5em;
        }

        .row.gtr-150 {
        margin-top: 0;
        margin-left: -2.25em;
        }

        .row.gtr-150 > * {
        padding: 0 0 0 2.25em;
        }

        .row.gtr-150.gtr-uniform {
        margin-top: -2.25em;
        }

        .row.gtr-150.gtr-uniform > * {
        padding-top: 2.25em;
        }

        .row.gtr-200 {
        margin-top: 0;
        margin-left: -3em;
        }

        .row.gtr-200 > * {
        padding: 0 0 0 3em;
        }

        .row.gtr-200.gtr-uniform {
        margin-top: -3em;
        }

        .row.gtr-200.gtr-uniform > * {
        padding-top: 3em;
        }

        @media screen and (max-width: 1680px) {
        .row {
            display: flex;
            flex-wrap: wrap;
            box-sizing: border-box;
            align-items: stretch;
        }

        .row > * {
            box-sizing: border-box;
        }

        .row.gtr-uniform > * > :last-child {
            margin-bottom: 0;
        }

        .row.aln-left {
            justify-content: flex-start;
        }

        .row.aln-center {
            justify-content: center;
        }

        .row.aln-right {
            justify-content: flex-end;
        }

        .row.aln-top {
            align-items: flex-start;
        }

        .row.aln-middle {
            align-items: center;
        }

        .row.aln-bottom {
            align-items: flex-end;
        }

        .row > .imp-xlarge {
            order: -1;
        }

        .row > .col-1-xlarge {
            width: 8.33333%;
        }

        .row > .off-1-xlarge {
            margin-left: 8.33333%;
        }

        .row > .col-2-xlarge {
            width: 16.66667%;
        }

        .row > .off-2-xlarge {
            margin-left: 16.66667%;
        }

        .row > .col-3-xlarge {
            width: 25%;
        }

        .row > .off-3-xlarge {
            margin-left: 25%;
        }

        .row > .col-4-xlarge {
            width: 33.33333%;
        }

        .row > .off-4-xlarge {
            margin-left: 33.33333%;
        }

        .row > .col-5-xlarge {
            width: 41.66667%;
        }

        .row > .off-5-xlarge {
            margin-left: 41.66667%;
        }

        .row > .col-6-xlarge {
            width: 50%;
        }

        .row > .off-6-xlarge {
            margin-left: 50%;
        }

        .row > .col-7-xlarge {
            width: 58.33333%;
        }

        .row > .off-7-xlarge {
            margin-left: 58.33333%;
        }

        .row > .col-8-xlarge {
            width: 66.66667%;
        }

        .row > .off-8-xlarge {
            margin-left: 66.66667%;
        }

        .row > .col-9-xlarge {
            width: 75%;
        }

        .row > .off-9-xlarge {
            margin-left: 75%;
        }

        .row > .col-10-xlarge {
            width: 83.33333%;
        }

        .row > .off-10-xlarge {
            margin-left: 83.33333%;
        }

        .row > .col-11-xlarge {
            width: 91.66667%;
        }

        .row > .off-11-xlarge {
            margin-left: 91.66667%;
        }

        .row > .col-12-xlarge {
            width: 100%;
        }

        .row > .off-12-xlarge {
            margin-left: 100%;
        }

        .row.gtr-0 {
            margin-top: 0;
            margin-left: 0em;
        }

        .row.gtr-0 > * {
            padding: 0 0 0 0em;
        }

        .row.gtr-0.gtr-uniform {
            margin-top: 0em;
        }

        .row.gtr-0.gtr-uniform > * {
            padding-top: 0em;
        }

        .row.gtr-25 {
            margin-top: 0;
            margin-left: -0.375em;
        }

        .row.gtr-25 > * {
            padding: 0 0 0 0.375em;
        }

        .row.gtr-25.gtr-uniform {
            margin-top: -0.375em;
        }

        .row.gtr-25.gtr-uniform > * {
            padding-top: 0.375em;
        }

        .row.gtr-50 {
            margin-top: 0;
            margin-left: -0.75em;
        }

        .row.gtr-50 > * {
            padding: 0 0 0 0.75em;
        }

        .row.gtr-50.gtr-uniform {
            margin-top: -0.75em;
        }

        .row.gtr-50.gtr-uniform > * {
            padding-top: 0.75em;
        }

        .row {
            margin-top: 0;
            margin-left: -1.5em;
        }

        .row > * {
            padding: 0 0 0 1.5em;
        }

        .row.gtr-uniform {
            margin-top: -1.5em;
        }

        .row.gtr-uniform > * {
            padding-top: 1.5em;
        }

        .row.gtr-150 {
            margin-top: 0;
            margin-left: -2.25em;
        }

        .row.gtr-150 > * {
            padding: 0 0 0 2.25em;
        }

        .row.gtr-150.gtr-uniform {
            margin-top: -2.25em;
        }

        .row.gtr-150.gtr-uniform > * {
            padding-top: 2.25em;
        }

        .row.gtr-200 {
            margin-top: 0;
            margin-left: -3em;
        }

        .row.gtr-200 > * {
            padding: 0 0 0 3em;
        }

        .row.gtr-200.gtr-uniform {
            margin-top: -3em;
        }

        .row.gtr-200.gtr-uniform > * {
            padding-top: 3em;
        }
        }

        @media screen and (max-width: 1280px) {
        .row {
            display: flex;
            flex-wrap: wrap;
            box-sizing: border-box;
            align-items: stretch;
        }

        .row > * {
            box-sizing: border-box;
        }

        .row.gtr-uniform > * > :last-child {
            margin-bottom: 0;
        }

        .row.aln-left {
            justify-content: flex-start;
        }

        .row.aln-center {
            justify-content: center;
        }

        .row.aln-right {
            justify-content: flex-end;
        }

        .row.aln-top {
            align-items: flex-start;
        }

        .row.aln-middle {
            align-items: center;
        }

        .row.aln-bottom {
            align-items: flex-end;
        }

        .row > .imp-large {
            order: -1;
        }

        .row > .col-1-large {
            width: 8.33333%;
        }

        .row > .off-1-large {
            margin-left: 8.33333%;
        }

        .row > .col-2-large {
            width: 16.66667%;
        }

        .row > .off-2-large {
            margin-left: 16.66667%;
        }

        .row > .col-3-large {
            width: 25%;
        }

        .row > .off-3-large {
            margin-left: 25%;
        }

        .row > .col-4-large {
            width: 33.33333%;
        }

        .row > .off-4-large {
            margin-left: 33.33333%;
        }

        .row > .col-5-large {
            width: 41.66667%;
        }

        .row > .off-5-large {
            margin-left: 41.66667%;
        }

        .row > .col-6-large {
            width: 50%;
        }

        .row > .off-6-large {
            margin-left: 50%;
        }

        .row > .col-7-large {
            width: 58.33333%;
        }

        .row > .off-7-large {
            margin-left: 58.33333%;
        }

        .row > .col-8-large {
            width: 66.66667%;
        }

        .row > .off-8-large {
            margin-left: 66.66667%;
        }

        .row > .col-9-large {
            width: 75%;
        }

        .row > .off-9-large {
            margin-left: 75%;
        }

        .row > .col-10-large {
            width: 83.33333%;
        }

        .row > .off-10-large {
            margin-left: 83.33333%;
        }

        .row > .col-11-large {
            width: 91.66667%;
        }

        .row > .off-11-large {
            margin-left: 91.66667%;
        }

        .row > .col-12-large {
            width: 100%;
        }

        .row > .off-12-large {
            margin-left: 100%;
        }

        .row.gtr-0 {
            margin-top: 0;
            margin-left: 0em;
        }

        .row.gtr-0 > * {
            padding: 0 0 0 0em;
        }

        .row.gtr-0.gtr-uniform {
            margin-top: 0em;
        }

        .row.gtr-0.gtr-uniform > * {
            padding-top: 0em;
        }

        .row.gtr-25 {
            margin-top: 0;
            margin-left: -0.375em;
        }

        .row.gtr-25 > * {
            padding: 0 0 0 0.375em;
        }

        .row.gtr-25.gtr-uniform {
            margin-top: -0.375em;
        }

        .row.gtr-25.gtr-uniform > * {
            padding-top: 0.375em;
        }

        .row.gtr-50 {
            margin-top: 0;
            margin-left: -0.75em;
        }

        .row.gtr-50 > * {
            padding: 0 0 0 0.75em;
        }

        .row.gtr-50.gtr-uniform {
            margin-top: -0.75em;
        }

        .row.gtr-50.gtr-uniform > * {
            padding-top: 0.75em;
        }

        .row {
            margin-top: 0;
            margin-left: -1.5em;
        }

        .row > * {
            padding: 0 0 0 1.5em;
        }

        .row.gtr-uniform {
            margin-top: -1.5em;
        }

        .row.gtr-uniform > * {
            padding-top: 1.5em;
        }

        .row.gtr-150 {
            margin-top: 0;
            margin-left: -2.25em;
        }

        .row.gtr-150 > * {
            padding: 0 0 0 2.25em;
        }

        .row.gtr-150.gtr-uniform {
            margin-top: -2.25em;
        }

        .row.gtr-150.gtr-uniform > * {
            padding-top: 2.25em;
        }

        .row.gtr-200 {
            margin-top: 0;
            margin-left: -3em;
        }

        .row.gtr-200 > * {
            padding: 0 0 0 3em;
        }

        .row.gtr-200.gtr-uniform {
            margin-top: -3em;
        }

        .row.gtr-200.gtr-uniform > * {
            padding-top: 3em;
        }
        }

        @media screen and (max-width: 980px) {
        .row {
            display: flex;
            flex-wrap: wrap;
            box-sizing: border-box;
            align-items: stretch;
        }

        .row > * {
            box-sizing: border-box;
        }

        .row.gtr-uniform > * > :last-child {
            margin-bottom: 0;
        }

        .row.aln-left {
            justify-content: flex-start;
        }

        .row.aln-center {
            justify-content: center;
        }

        .row.aln-right {
            justify-content: flex-end;
        }

        .row.aln-top {
            align-items: flex-start;
        }

        .row.aln-middle {
            align-items: center;
        }

        .row.aln-bottom {
            align-items: flex-end;
        }

        .row > .imp-medium {
            order: -1;
        }

        .row > .col-1-medium {
            width: 8.33333%;
        }

        .row > .off-1-medium {
            margin-left: 8.33333%;
        }

        .row > .col-2-medium {
            width: 16.66667%;
        }

        .row > .off-2-medium {
            margin-left: 16.66667%;
        }

        .row > .col-3-medium {
            width: 25%;
        }

        .row > .off-3-medium {
            margin-left: 25%;
        }

        .row > .col-4-medium {
            width: 33.33333%;
        }

        .row > .off-4-medium {
            margin-left: 33.33333%;
        }

        .row > .col-5-medium {
            width: 41.66667%;
        }

        .row > .off-5-medium {
            margin-left: 41.66667%;
        }

        .row > .col-6-medium {
            width: 50%;
        }

        .row > .off-6-medium {
            margin-left: 50%;
        }

        .row > .col-7-medium {
            width: 58.33333%;
        }

        .row > .off-7-medium {
            margin-left: 58.33333%;
        }

        .row > .col-8-medium {
            width: 66.66667%;
        }

        .row > .off-8-medium {
            margin-left: 66.66667%;
        }

        .row > .col-9-medium {
            width: 75%;
        }

        .row > .off-9-medium {
            margin-left: 75%;
        }

        .row > .col-10-medium {
            width: 83.33333%;
        }

        .row > .off-10-medium {
            margin-left: 83.33333%;
        }

        .row > .col-11-medium {
            width: 91.66667%;
        }

        .row > .off-11-medium {
            margin-left: 91.66667%;
        }

        .row > .col-12-medium {
            width: 100%;
        }

        .row > .off-12-medium {
            margin-left: 100%;
        }

        .row.gtr-0 {
            margin-top: 0;
            margin-left: 0em;
        }

        .row.gtr-0 > * {
            padding: 0 0 0 0em;
        }

        .row.gtr-0.gtr-uniform {
            margin-top: 0em;
        }

        .row.gtr-0.gtr-uniform > * {
            padding-top: 0em;
        }

        .row.gtr-25 {
            margin-top: 0;
            margin-left: -0.375em;
        }

        .row.gtr-25 > * {
            padding: 0 0 0 0.375em;
        }

        .row.gtr-25.gtr-uniform {
            margin-top: -0.375em;
        }

        .row.gtr-25.gtr-uniform > * {
            padding-top: 0.375em;
        }

        .row.gtr-50 {
            margin-top: 0;
            margin-left: -0.75em;
        }

        .row.gtr-50 > * {
            padding: 0 0 0 0.75em;
        }

        .row.gtr-50.gtr-uniform {
            margin-top: -0.75em;
        }

        .row.gtr-50.gtr-uniform > * {
            padding-top: 0.75em;
        }

        .row {
            margin-top: 0;
            margin-left: -1.5em;
        }

        .row > * {
            padding: 0 0 0 1.5em;
        }

        .row.gtr-uniform {
            margin-top: -1.5em;
        }

        .row.gtr-uniform > * {
            padding-top: 1.5em;
        }

        .row.gtr-150 {
            margin-top: 0;
            margin-left: -2.25em;
        }

        .row.gtr-150 > * {
            padding: 0 0 0 2.25em;
        }

        .row.gtr-150.gtr-uniform {
            margin-top: -2.25em;
        }

        .row.gtr-150.gtr-uniform > * {
            padding-top: 2.25em;
        }

        .row.gtr-200 {
            margin-top: 0;
            margin-left: -3em;
        }

        .row.gtr-200 > * {
            padding: 0 0 0 3em;
        }

        .row.gtr-200.gtr-uniform {
            margin-top: -3em;
        }

        .row.gtr-200.gtr-uniform > * {
            padding-top: 3em;
        }
        }

        @media screen and (max-width: 736px) {
        .row {
            display: flex;
            flex-wrap: wrap;
            box-sizing: border-box;
            align-items: stretch;
        }

        .row > * {
            box-sizing: border-box;
        }

        .row.gtr-uniform > * > :last-child {
            margin-bottom: 0;
        }

        .row.aln-left {
            justify-content: flex-start;
        }

        .row.aln-center {
            justify-content: center;
        }

        .row.aln-right {
            justify-content: flex-end;
        }

        .row.aln-top {
            align-items: flex-start;
        }

        .row.aln-middle {
            align-items: center;
        }

        .row.aln-bottom {
            align-items: flex-end;
        }

        .row > .imp-small {
            order: -1;
        }

        .row > .col-1-small {
            width: 8.33333%;
        }

        .row > .off-1-small {
            margin-left: 8.33333%;
        }

        .row > .col-2-small {
            width: 16.66667%;
        }

        .row > .off-2-small {
            margin-left: 16.66667%;
        }

        .row > .col-3-small {
            width: 25%;
        }

        .row > .off-3-small {
            margin-left: 25%;
        }

        .row > .col-4-small {
            width: 33.33333%;
        }

        .row > .off-4-small {
            margin-left: 33.33333%;
        }

        .row > .col-5-small {
            width: 41.66667%;
        }

        .row > .off-5-small {
            margin-left: 41.66667%;
        }

        .row > .col-6-small {
            width: 50%;
        }

        .row > .off-6-small {
            margin-left: 50%;
        }

        .row > .col-7-small {
            width: 58.33333%;
        }

        .row > .off-7-small {
            margin-left: 58.33333%;
        }

        .row > .col-8-small {
            width: 66.66667%;
        }

        .row > .off-8-small {
            margin-left: 66.66667%;
        }

        .row > .col-9-small {
            width: 75%;
        }

        .row > .off-9-small {
            margin-left: 75%;
        }

        .row > .col-10-small {
            width: 83.33333%;
        }

        .row > .off-10-small {
            margin-left: 83.33333%;
        }

        .row > .col-11-small {
            width: 91.66667%;
        }

        .row > .off-11-small {
            margin-left: 91.66667%;
        }

        .row > .col-12-small {
            width: 100%;
        }

        .row > .off-12-small {
            margin-left: 100%;
        }

        .row.gtr-0 {
            margin-top: 0;
            margin-left: 0em;
        }

        .row.gtr-0 > * {
            padding: 0 0 0 0em;
        }

        .row.gtr-0.gtr-uniform {
            margin-top: 0em;
        }

        .row.gtr-0.gtr-uniform > * {
            padding-top: 0em;
        }

        .row.gtr-25 {
            margin-top: 0;
            margin-left: -0.375em;
        }

        .row.gtr-25 > * {
            padding: 0 0 0 0.375em;
        }

        .row.gtr-25.gtr-uniform {
            margin-top: -0.375em;
        }

        .row.gtr-25.gtr-uniform > * {
            padding-top: 0.375em;
        }

        .row.gtr-50 {
            margin-top: 0;
            margin-left: -0.75em;
        }

        .row.gtr-50 > * {
            padding: 0 0 0 0.75em;
        }

        .row.gtr-50.gtr-uniform {
            margin-top: -0.75em;
        }

        .row.gtr-50.gtr-uniform > * {
            padding-top: 0.75em;
        }

        .row {
            margin-top: 0;
            margin-left: -1.5em;
        }

        .row > * {
            padding: 0 0 0 1.5em;
        }

        .row.gtr-uniform {
            margin-top: -1.5em;
        }

        .row.gtr-uniform > * {
            padding-top: 1.5em;
        }

        .row.gtr-150 {
            margin-top: 0;
            margin-left: -2.25em;
        }

        .row.gtr-150 > * {
            padding: 0 0 0 2.25em;
        }

        .row.gtr-150.gtr-uniform {
            margin-top: -2.25em;
        }

        .row.gtr-150.gtr-uniform > * {
            padding-top: 2.25em;
        }

        .row.gtr-200 {
            margin-top: 0;
            margin-left: -3em;
        }

        .row.gtr-200 > * {
            padding: 0 0 0 3em;
        }

        .row.gtr-200.gtr-uniform {
            margin-top: -3em;
        }

        .row.gtr-200.gtr-uniform > * {
            padding-top: 3em;
        }
        }

        @media screen and (max-width: 480px) {
        .row {
            display: flex;
            flex-wrap: wrap;
            box-sizing: border-box;
            align-items: stretch;
        }

        .row > * {
            box-sizing: border-box;
        }

        .row.gtr-uniform > * > :last-child {
            margin-bottom: 0;
        }

        .row.aln-left {
            justify-content: flex-start;
        }

        .row.aln-center {
            justify-content: center;
        }

        .row.aln-right {
            justify-content: flex-end;
        }

        .row.aln-top {
            align-items: flex-start;
        }

        .row.aln-middle {
            align-items: center;
        }

        .row.aln-bottom {
            align-items: flex-end;
        }

        .row > .imp-xsmall {
            order: -1;
        }

        .row > .col-1-xsmall {
            width: 8.33333%;
        }

        .row > .off-1-xsmall {
            margin-left: 8.33333%;
        }

        .row > .col-2-xsmall {
            width: 16.66667%;
        }

        .row > .off-2-xsmall {
            margin-left: 16.66667%;
        }

        .row > .col-3-xsmall {
            width: 25%;
        }

        .row > .off-3-xsmall {
            margin-left: 25%;
        }

        .row > .col-4-xsmall {
            width: 33.33333%;
        }

        .row > .off-4-xsmall {
            margin-left: 33.33333%;
        }

        .row > .col-5-xsmall {
            width: 41.66667%;
        }

        .row > .off-5-xsmall {
            margin-left: 41.66667%;
        }

        .row > .col-6-xsmall {
            width: 50%;
        }

        .row > .off-6-xsmall {
            margin-left: 50%;
        }

        .row > .col-7-xsmall {
            width: 58.33333%;
        }

        .row > .off-7-xsmall {
            margin-left: 58.33333%;
        }

        .row > .col-8-xsmall {
            width: 66.66667%;
        }

        .row > .off-8-xsmall {
            margin-left: 66.66667%;
        }

        .row > .col-9-xsmall {
            width: 75%;
        }

        .row > .off-9-xsmall {
            margin-left: 75%;
        }

        .row > .col-10-xsmall {
            width: 83.33333%;
        }

        .row > .off-10-xsmall {
            margin-left: 83.33333%;
        }

        .row > .col-11-xsmall {
            width: 91.66667%;
        }

        .row > .off-11-xsmall {
            margin-left: 91.66667%;
        }

        .row > .col-12-xsmall {
            width: 100%;
        }

        .row > .off-12-xsmall {
            margin-left: 100%;
        }

        .row.gtr-0 {
            margin-top: 0;
            margin-left: 0em;
        }

        .row.gtr-0 > * {
            padding: 0 0 0 0em;
        }

        .row.gtr-0.gtr-uniform {
            margin-top: 0em;
        }

        .row.gtr-0.gtr-uniform > * {
            padding-top: 0em;
        }

        .row.gtr-25 {
            margin-top: 0;
            margin-left: -0.375em;
        }

        .row.gtr-25 > * {
            padding: 0 0 0 0.375em;
        }

        .row.gtr-25.gtr-uniform {
            margin-top: -0.375em;
        }

        .row.gtr-25.gtr-uniform > * {
            padding-top: 0.375em;
        }

        .row.gtr-50 {
            margin-top: 0;
            margin-left: -0.75em;
        }

        .row.gtr-50 > * {
            padding: 0 0 0 0.75em;
        }

        .row.gtr-50.gtr-uniform {
            margin-top: -0.75em;
        }

        .row.gtr-50.gtr-uniform > * {
            padding-top: 0.75em;
        }

        .row {
            margin-top: 0;
            margin-left: -1.5em;
        }

        .row > * {
            padding: 0 0 0 1.5em;
        }

        .row.gtr-uniform {
            margin-top: -1.5em;
        }

        .row.gtr-uniform > * {
            padding-top: 1.5em;
        }

        .row.gtr-150 {
            margin-top: 0;
            margin-left: -2.25em;
        }

        .row.gtr-150 > * {
            padding: 0 0 0 2.25em;
        }

        .row.gtr-150.gtr-uniform {
            margin-top: -2.25em;
        }

        .row.gtr-150.gtr-uniform > * {
            padding-top: 2.25em;
        }

        .row.gtr-200 {
            margin-top: 0;
            margin-left: -3em;
        }

        .row.gtr-200 > * {
            padding: 0 0 0 3em;
        }

        .row.gtr-200.gtr-uniform {
            margin-top: -3em;
        }

        .row.gtr-200.gtr-uniform > * {
            padding-top: 3em;
        }
        }

        /* Section/Article */

        section.special,
        article.special {
        text-align: center;
        }

        header p {
        color: rgba(255, 255, 255, 0.5);
        position: relative;
        top: -0.25em;
        }

        header h3 + p {
        font-size: 1.1em;
        }

        header h4 + p,
        header h5 + p,
        header h6 + p {
        font-size: 0.9em;
        }

        header.major {
        margin: 0 0 3.5em 0;
        }

        header.major h2,
        header.major h3,
        header.major h4,
        header.major h5,
        header.major h6 {
        border-bottom: solid 2px #fff;
        display: inline-block;
        padding-bottom: 1em;
        position: relative;
        }

        header.major h2:after,
        header.major h3:after,
        header.major h4:after,
        header.major h5:after,
        header.major h6:after {
        content: "";
        display: block;
        height: 1px;
        }

        header.major p {
        color: #fff;
        top: 0;
        }

        @media screen and (max-width: 736px) {
        header.major {
            margin: 0 0 2em 0;
        }
        }

        @media screen and (max-width: 980px) {
        header br {
            display: none;
        }
        }

        /* Form */

        form {
        margin: 0 0 2em 0;
        }

        label {
        color: #fff;
        display: block;
        font-size: 0.9em;
        font-weight: 600;
        margin: 0 0 1em 0;
        }

        input[type="text"],
        input[type="password"],
        input[type="email"],
        select,
        textarea {
        -moz-appearance: none;
        -webkit-appearance: none;
        -ms-appearance: none;
        appearance: none;
        background-color: rgba(144, 144, 144, 0.25);
        border-radius: 3px;
        border: none;
        color: inherit;
        display: block;
        outline: 0;
        padding: 0 1em;
        text-decoration: none;
        width: 100%;
        }

        input[type="text"]:invalid,
        input[type="password"]:invalid,
        input[type="email"]:invalid,
        select:invalid,
        textarea:invalid {
        box-shadow: none;
        }

        input[type="text"]:focus,
        input[type="password"]:focus,
        input[type="email"]:focus,
        select:focus,
        textarea:focus {
        box-shadow: 0 0 0 2px #21b2a6;
        }

        select {
        background-size: 1.25em;
        background-repeat: no-repeat;
        background-position: calc(100% - 1em) center;
        height: 2.75em;
        padding-right: 2.75em;
        text-overflow: ellipsis;
        }

        select:focus::-ms-value {
        background-color: transparent;
        }

        select::-ms-expand {
        display: none;
        }

        input[type="text"],
        input[type="password"],
        input[type="email"],
        select {
        height: 2.75em;
        }

        textarea {
        padding: 0.75em 1em;
        }

        input[type="checkbox"],
        input[type="radio"] {
        -moz-appearance: none;
        -webkit-appearance: none;
        -ms-appearance: none;
        appearance: none;
        display: block;
        float: left;
        margin-right: -2em;
        opacity: 0;
        width: 1em;
        z-index: -1;
        }

        input[type="checkbox"] + label,
        input[type="radio"] + label {
        text-decoration: none;
        color: #fff;
        cursor: pointer;
        display: inline-block;
        font-size: 1em;
        font-weight: 400;
        padding-left: 2.4em;
        padding-right: 0.75em;
        position: relative;
        }

        input[type="checkbox"] + label:before,
        input[type="radio"] + label:before {
        -moz-osx-font-smoothing: grayscale;
        -webkit-font-smoothing: antialiased;
        display: inline-block;
        font-style: normal;
        font-variant: normal;
        text-rendering: auto;
        line-height: 1;
        text-transform: none !important;
        font-family: "Font Awesome 5 Free";
        font-weight: 900;
        }

        input[type="checkbox"] + label:before,
        input[type="radio"] + label:before {
        background: rgba(144, 144, 144, 0.25);
        border-radius: 3px;
        content: "";
        display: inline-block;
        font-size: 0.8em;
        height: 2.0625em;
        left: 0;
        line-height: 2.0625em;
        position: absolute;
        text-align: center;
        top: 0;
        width: 2.0625em;
        }

        input[type="checkbox"]:checked + label:before,
        input[type="radio"]:checked + label:before {
        background: #2e3842;
        color: #fff;
        content: "\f00c";
        }

        input[type="checkbox"]:focus + label:before,
        input[type="radio"]:focus + label:before {
        box-shadow: 0 0 0 2px #21b2a6;
        }

        input[type="checkbox"] + label:before {
        border-radius: 3px;
        }

        input[type="radio"] + label:before {
        border-radius: 100%;
        }

        ::-webkit-input-placeholder {
        color: rgba(255, 255, 255, 0.5) !important;
        opacity: 1;
        }

        :-moz-placeholder {
        color: rgba(255, 255, 255, 0.5) !important;
        opacity: 1;
        }

        ::-moz-placeholder {
        color: rgba(255, 255, 255, 0.5) !important;
        opacity: 1;
        }

        :-ms-input-placeholder {
        color: rgba(255, 255, 255, 0.5) !important;
        opacity: 1;
        }

        /* Box */

        .box {
        border-radius: 3px;
        border: solid 2px #fff;
        margin-bottom: 2em;
        padding: 1.5em;
        }

        .box > :last-child,
        .box > :last-child > :last-child,
        .box > :last-child > :last-child > :last-child {
        margin-bottom: 0;
        }

        .box.alt {
        border: 0;
        border-radius: 0;
        padding: 0;
        }

        /* Icon */

        .icon {
        text-decoration: none;
        border-bottom: none;
        position: relative;
        }

        .icon:before {
        -moz-osx-font-smoothing: grayscale;
        -webkit-font-smoothing: antialiased;
        display: inline-block;
        font-style: normal;
        font-variant: normal;
        text-rendering: auto;
        line-height: 1;
        text-transform: none !important;
        font-family: "Font Awesome 5 Free";
        font-weight: 400;
        }

        .icon > .label {
        display: none;
        }

        .icon:before {
        line-height: inherit;
        }

        .icon.solid:before {
        font-weight: 900;
        }

        .icon.brands:before {
        font-family: "Font Awesome 5 Brands";
        }

        .icon.major {
        -moz-transform: rotate(-45deg);
        -webkit-transform: rotate(-45deg);
        -ms-transform: rotate(-45deg);
        transform: rotate(-45deg);
        border-radius: 3px;
        border: solid 2px #fff;
        display: inline-block;
        font-size: 1.35em;
        height: calc(3em + 2px);
        line-height: 3em;
        text-align: center;
        width: calc(3em + 2px);
        }

        .icon.major:before {
        -moz-transform: rotate(45deg);
        -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        transform: rotate(45deg);
        display: inline-block;
        font-size: 1.5em;
        }

        @media screen and (max-width: 736px) {
        .icon.major {
            font-size: 1em;
        }
        }

        .icon.style1 {
        color: #00ffcc;
        }

        .icon.style2 {
        color: #00f0ff;
        }

        .icon.style3 {
        color: #76ddff;
        }

        /* Image */

        .image {
        border-radius: 3px;
        border: 0;
        display: inline-block;
        position: relative;
        }

        .image img {
        border-radius: 3px;
        display: block;
        }

        .image.left {
        float: left;
        margin: 0 2em 2em 0;
        top: 0.25em;
        }

        .image.right {
        float: right;
        margin: 0 0 2em 2em;
        top: 0.25em;
        }

        .image.left,
        .image.right {
        max-width: 40%;
        }

        .image.left img,
        .image.right img {
        width: 100%;
        }

        .image.fit {
        display: block;
        margin: 0 0 2em 0;
        width: 100%;
        }

        .image.fit img {
        width: 100%;
        }

        /* List */

        ol {
        list-style: decimal;
        margin: 0 0 2em 0;
        padding-left: 1.25em;
        }

        ol li {
        padding-left: 0.25em;
        }

        ul {
        list-style: disc;
        margin: 0 0 2em 0;
        padding-left: 1em;
        }

        ul li {
        padding-left: 0.5em;
        }

        ul.alt {
        list-style: none;
        padding-left: 0;
        }

        ul.alt li {
        border-top: solid 1px #fff;
        padding: 0.5em 0;
        }

        ul.alt li:first-child {
        border-top: 0;
        padding-top: 0;
        }

        dl {
        margin: 0 0 2em 0;
        }

        /* Actions */

        ul.actions {
        display: -moz-flex;
        display: -webkit-flex;
        display: -ms-flex;
        display: flex;
        cursor: default;
        list-style: none;
        margin-left: -1em;
        padding-left: 0;
        }

        ul.actions li {
        padding: 0 0 0 1em;
        vertical-align: middle;
        }

        ul.actions.special {
        -moz-justify-content: center;
        -webkit-justify-content: center;
        -ms-justify-content: center;
        justify-content: center;
        width: 100%;
        margin-left: 0;
        }

        ul.actions.special li:first-child {
        padding-left: 0;
        }

        ul.actions.stacked {
        -moz-flex-direction: column;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        margin-left: 0;
        }

        ul.actions.stacked li {
        padding: 1em 0 0 0;
        }

        ul.actions.stacked li:first-child {
        padding-top: 0;
        }

        ul.actions.fit {
        width: calc(100% + 1em);
        }

        ul.actions.fit li {
        -moz-flex-grow: 1;
        -webkit-flex-grow: 1;
        -ms-flex-grow: 1;
        flex-grow: 1;
        -moz-flex-shrink: 1;
        -webkit-flex-shrink: 1;
        -ms-flex-shrink: 1;
        flex-shrink: 1;
        width: 100%;
        }

        ul.actions.fit li > * {
        width: 100%;
        }

        ul.actions.fit.stacked {
        width: 100%;
        }

        @media screen and (max-width: 480px) {
        ul.actions:not(.fixed) {
            -moz-flex-direction: column;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            margin-left: 0;
            width: 100% !important;
        }

        ul.actions:not(.fixed) li {
            -moz-flex-grow: 1;
            -webkit-flex-grow: 1;
            -ms-flex-grow: 1;
            flex-grow: 1;
            -moz-flex-shrink: 1;
            -webkit-flex-shrink: 1;
            -ms-flex-shrink: 1;
            flex-shrink: 1;
            padding: 1em 0 0 0;
            text-align: center;
            width: 100%;
        }

        ul.actions:not(.fixed) li > * {
            width: 100%;
        }

        ul.actions:not(.fixed) li:first-child {
            padding-top: 0;
        }

        ul.actions:not(.fixed) li input[type="submit"],
        ul.actions:not(.fixed) li input[type="reset"],
        ul.actions:not(.fixed) li input[type="button"],
        ul.actions:not(.fixed) li button,
        ul.actions:not(.fixed) li .button {
            width: 100%;
        }

        ul.actions:not(.fixed) li input[type="submit"].icon:before,
        ul.actions:not(.fixed) li input[type="reset"].icon:before,
        ul.actions:not(.fixed) li input[type="button"].icon:before,
        ul.actions:not(.fixed) li button.icon:before,
        ul.actions:not(.fixed) li .button.icon:before {
            margin-left: -0.5em;
        }
        }

        /* Icons */

        ul.icons {
        cursor: default;
        list-style: none;
        padding-left: 0;
        }

        ul.icons li {
        display: inline-block;
        padding: 0 1em 0 0;
        }

        ul.icons li:last-child {
        padding-right: 0 !important;
        }

        ul.icons.major {
        padding: 1em 0;
        }

        ul.icons.major li {
        padding-right: 3.5em;
        }

        @media screen and (max-width: 736px) {
        ul.icons.major li {
            padding: 0 1em !important;
        }
        }

        /* Table */

        .table-wrapper {
        -webkit-overflow-scrolling: touch;
        overflow-x: auto;
        }

        table {
        margin: 0 0 2em 0;
        width: 100%;
        }

        table tbody tr {
        border: solid 1px #fff;
        border-left: 0;
        border-right: 0;
        }

        table tbody tr:nth-child(2n + 1) {
        background-color: rgba(144, 144, 144, 0.25);
        }

        table td {
        padding: 0.75em 0.75em;
        }

        table th {
        color: #fff;
        font-size: 0.9em;
        font-weight: 600;
        padding: 0 0.75em 0.75em 0.75em;
        text-align: left;
        }

        table thead {
        border-bottom: solid 2px #fff;
        }

        table tfoot {
        border-top: solid 2px #fff;
        }

        table.alt {
        border-collapse: separate;
        }

        table.alt tbody tr td {
        border: solid 1px #fff;
        border-left-width: 0;
        border-top-width: 0;
        }

        table.alt tbody tr td:first-child {
        border-left-width: 1px;
        }

        table.alt tbody tr:first-child td {
        border-top-width: 1px;
        }

        table.alt thead {
        border-bottom: 0;
        }

        table.alt tfoot {
        border-top: 0;
        }

        /* Button */

        input[type="submit"],
        input[type="reset"],
        input[type="button"],
        button,
        .button {
        -moz-appearance: none;
        -webkit-appearance: none;
        -ms-appearance: none;
        appearance: none;
        -moz-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
        -webkit-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
        -ms-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
        transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
        background-color: transparent;
        border-radius: 3px;
        border: 0;
        box-shadow: inset 0 0 0 2px #fff;
        color: #fff;
        cursor: pointer;
        display: inline-block;
        font-size: 0.8em;
        font-weight: 600;
        height: 3.125em;
        letter-spacing: 0.225em;
        line-height: 3.125em;
        max-width: 30em;
        padding: 0 2.75em;
        text-align: center;
        text-decoration: none;
        text-transform: uppercase;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        }

        input[type="submit"]:hover,
        input[type="reset"]:hover,
        input[type="button"]:hover,
        button:hover,
        .button:hover {
        background-color: rgba(144, 144, 144, 0.25);
        }

        input[type="submit"]:active,
        input[type="reset"]:active,
        input[type="button"]:active,
        button:active,
        .button:active {
        background-color: rgba(144, 144, 144, 0.5);
        }

        input[type="submit"].icon:before,
        input[type="reset"].icon:before,
        input[type="button"].icon:before,
        button.icon:before,
        .button.icon:before {
        margin-right: 0.5em;
        }

        input[type="submit"].fit,
        input[type="reset"].fit,
        input[type="button"].fit,
        button.fit,
        .button.fit {
        width: 100%;
        }

        input[type="submit"].small,
        input[type="reset"].small,
        input[type="button"].small,
        button.small,
        .button.small {
        font-size: 0.8em;
        }

        input[type="submit"].large,
        input[type="reset"].large,
        input[type="button"].large,
        button.large,
        .button.large {
        font-size: 1.35em;
        }

        input[type="submit"].primary,
        input[type="reset"].primary,
        input[type="button"].primary,
        button.primary,
        .button.primary {
        background-color: #ed4933;
        box-shadow: none !important;
        color: #ffffff !important;
        }

        input[type="submit"].primary:hover,
        input[type="reset"].primary:hover,
        input[type="button"].primary:hover,
        button.primary:hover,
        .button.primary:hover {
        background-color: #ef5e4a !important;
        }

        input[type="submit"].primary:active,
        input[type="reset"].primary:active,
        input[type="button"].primary:active,
        button.primary:active,
        .button.primary:active {
        background-color: #eb341c !important;
        }

        input[type="submit"].disabled,
        input[type="submit"]:disabled,
        input[type="reset"].disabled,
        input[type="reset"]:disabled,
        input[type="button"].disabled,
        input[type="button"]:disabled,
        button.disabled,
        button:disabled,
        .button.disabled,
        .button:disabled {
        pointer-events: none;
        opacity: 0.25;
        }

        @media screen and (max-width: 736px) {
        input[type="submit"],
        input[type="reset"],
        input[type="button"],
        button,
        .button {
            height: 3.75em;
            line-height: 3.75em;
        }
        }

        /* Features */

        .features {
        display: -moz-flex;
        display: -webkit-flex;
        display: -ms-flex;
        display: flex;
        -moz-flex-wrap: wrap;
        -webkit-flex-wrap: wrap;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        -moz-justify-content: center;
        -webkit-justify-content: center;
        -ms-justify-content: center;
        justify-content: center;
        list-style: none;
        padding: 0;
        width: 100%;
        }

        .features li {
        padding: 4em 4em 2em 6em;
        display: block;
        position: relative;
        text-align: left;
        width: 50%;
        }

        .features li:nth-child(1) {
        background-color: rgba(0, 0, 0, 0.035);
        }

        .features li:nth-child(2) {
        background-color: rgba(0, 0, 0, 0.07);
        }

        .features li:nth-child(3) {
        background-color: rgba(0, 0, 0, 0.105);
        }

        .features li:nth-child(4) {
        background-color: rgba(0, 0, 0, 0.14);
        }

        .features li:nth-child(5) {
        background-color: rgba(0, 0, 0, 0.175);
        }

        .features li:nth-child(6) {
        background-color: rgba(0, 0, 0, 0.21);
        }

        .features li:nth-child(7) {
        background-color: rgba(0, 0, 0, 0.245);
        }

        .features li:nth-child(8) {
        background-color: rgba(0, 0, 0, 0.28);
        }

        .features li:nth-child(9) {
        background-color: rgba(0, 0, 0, 0.315);
        }

        .features li:nth-child(10) {
        background-color: rgba(0, 0, 0, 0.35);
        }

        .features li:before {
        display: block;
        color: #00ffcc;
        position: absolute;
        left: 1.75em;
        top: 2.75em;
        font-size: 1.5em;
        }

        .features li:nth-child(1) {
        border-top-left-radius: 3px;
        }

        .features li:nth-child(2) {
        border-top-right-radius: 3px;
        }

        .features li:nth-last-child(1) {
        border-bottom-right-radius: 3px;
        }

        .features li:nth-last-child(2) {
        border-bottom-left-radius: 3px;
        }

        @media screen and (max-width: 980px) {
        .features li {
            padding: 3em 2em 1em 2em;
            text-align: center;
        }

        .features li:before {
            left: 0;
            margin: 0 0 1em 0;
            position: relative;
            top: 0;
        }
        }

        @media screen and (max-width: 736px) {
        .features li {
            padding: 3em 0 1em 0;
            background-color: transparent !important;
            border-top: solid 2px #fff;
            width: 100%;
        }

        .features li:first-child {
            border-top: 0;
        }
        }

        /* Spotlight */

        .spotlight {
        -moz-align-items: center;
        -webkit-align-items: center;
        -ms-align-items: center;
        align-items: center;
        display: -moz-flex;
        display: -webkit-flex;
        display: -ms-flex;
        display: flex;
        }

        .spotlight .image {
        -moz-order: 1;
        -webkit-order: 1;
        -ms-order: 1;
        order: 1;
        border-radius: 0;
        width: 40%;
        }

        .spotlight .image img {
        border-radius: 0;
        width: 100%;
        }

        .spotlight .content {
        padding: 2em 4em 0.1em 4em;
        -moz-order: 2;
        -webkit-order: 2;
        -ms-order: 2;
        order: 2;
        max-width: 48em;
        width: 60%;
        }

        .spotlight:nth-child(2n) {
        -moz-flex-direction: row-reverse;
        -webkit-flex-direction: row-reverse;
        -ms-flex-direction: row-reverse;
        flex-direction: row-reverse;
        }

        .spotlight:nth-child(1) {
        background-color: rgba(0, 0, 0, 0.075);
        }

        .spotlight:nth-child(2) {
        background-color: rgba(0, 0, 0, 0.15);
        }

        .spotlight:nth-child(3) {
        background-color: rgba(0, 0, 0, 0.225);
        }

        .spotlight:nth-child(4) {
        background-color: rgba(0, 0, 0, 0.3);
        }

        .spotlight:nth-child(5) {
        background-color: rgba(0, 0, 0, 0.375);
        }

        .spotlight:nth-child(6) {
        background-color: rgba(0, 0, 0, 0.45);
        }

        .spotlight:nth-child(7) {
        background-color: rgba(0, 0, 0, 0.525);
        }

        .spotlight:nth-child(8) {
        background-color: rgba(0, 0, 0, 0.6);
        }

        .spotlight:nth-child(9) {
        background-color: rgba(0, 0, 0, 0.675);
        }

        .spotlight:nth-child(10) {
        background-color: rgba(0, 0, 0, 0.75);
        }

        @media screen and (max-width: 1280px) {
        .spotlight .image {
            width: 45%;
        }

        .spotlight .content {
            width: 55%;
        }
        }

        @media screen and (max-width: 980px) {
        .spotlight {
            display: block;
        }

        .spotlight br {
            display: none;
        }

        .spotlight .image {
            width: 100%;
        }

        .spotlight .content {
            padding: 4em 3em 2em 3em;
            max-width: none;
            text-align: center;
            width: 100%;
        }
        }

        @media screen and (max-width: 736px) {
        .spotlight .content {
            padding: 3em 2em 1em 2em;
        }
        }

        /* Wrapper */

        .wrapper {
        padding: 6em 0 4em 0;
        }

        .wrapper > .inner {
        width: 60em;
        margin: 0 auto;
        }

        @media screen and (max-width: 1280px) {
        .wrapper > .inner {
            width: 90%;
        }
        }

        @media screen and (max-width: 980px) {
        .wrapper > .inner {
            width: 100%;
        }
        }

        .wrapper.alt {
        padding: 0;
        }

        .wrapper.style1 {
        background-color: #21b2a6;
        color: #c8ece9;
        }

        .wrapper.style1 strong,
        .wrapper.style1 b {
        color: #ffffff;
        }

        .wrapper.style1 h2,
        .wrapper.style1 h3,
        .wrapper.style1 h4,
        .wrapper.style1 h5,
        .wrapper.style1 h6 {
        color: #ffffff;
        }

        .wrapper.style1 hr {
        border-color: rgba(0, 0, 0, 0.125);
        }

        .wrapper.style1 blockquote {
        border-color: rgba(0, 0, 0, 0.125);
        }

        .wrapper.style1 code {
        background: rgba(255, 255, 255, 0.075);
        }

        .wrapper.style1 header p {
        color: #a6e0db;
        }

        .wrapper.style1 header.major h2,
        .wrapper.style1 header.major h3,
        .wrapper.style1 header.major h4,
        .wrapper.style1 header.major h5,
        .wrapper.style1 header.major h6 {
        border-color: rgba(0, 0, 0, 0.125);
        }

        .wrapper.style1 header.major p {
        color: #c8ece9;
        }

        .wrapper.style1 label {
        color: #ffffff;
        }

        .wrapper.style1 input[type="text"],
        .wrapper.style1 input[type="password"],
        .wrapper.style1 input[type="email"],
        .wrapper.style1 select,
        .wrapper.style1 textarea {
        background-color: rgba(255, 255, 255, 0.075);
        }

        .wrapper.style1 select {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='40' height='40' preserveAspectRatio='none' viewBox='0 0 40 40'%3E%3Cpath d='M9.4,12.3l10.4,10.4l10.4-10.4c0.2-0.2,0.5-0.4,0.9-0.4c0.3,0,0.6,0.1,0.9,0.4l3.3,3.3c0.2,0.2,0.4,0.5,0.4,0.9 c0,0.4-0.1,0.6-0.4,0.9L20.7,31.9c-0.2,0.2-0.5,0.4-0.9,0.4c-0.3,0-0.6-0.1-0.9-0.4L4.3,17.3c-0.2-0.2-0.4-0.5-0.4-0.9 c0-0.4,0.1-0.6,0.4-0.9l3.3-3.3c0.2-0.2,0.5-0.4,0.9-0.4S9.1,12.1,9.4,12.3z' fill='rgba(0, 0, 0, 0.125)' /%3E%3C/svg%3E");
        }

        .wrapper.style1 select option {
        color: #ffffff;
        background: #21b2a6;
        }

        .wrapper.style1 input[type="checkbox"] + label,
        .wrapper.style1 input[type="radio"] + label {
        color: #c8ece9;
        }

        .wrapper.style1 input[type="checkbox"] + label:before,
        .wrapper.style1 input[type="radio"] + label:before {
        background: rgba(255, 255, 255, 0.075);
        }

        .wrapper.style1 input[type="checkbox"]:checked + label:before,
        .wrapper.style1 input[type="radio"]:checked + label:before {
        background: #ffffff;
        color: #21b2a6;
        }

        .wrapper.style1 ::-webkit-input-placeholder {
        color: #a6e0db !important;
        }

        .wrapper.style1 :-moz-placeholder {
        color: #a6e0db !important;
        }

        .wrapper.style1 ::-moz-placeholder {
        color: #a6e0db !important;
        }

        .wrapper.style1 :-ms-input-placeholder {
        color: #a6e0db !important;
        }

        .wrapper.style1 .formerize-placeholder {
        color: #a6e0db !important;
        }

        .wrapper.style1 .icon.major {
        border-color: rgba(0, 0, 0, 0.125);
        }

        .wrapper.style1 ul.alt li {
        border-color: rgba(0, 0, 0, 0.125);
        }

        .wrapper.style1 table tbody tr {
        border-color: rgba(0, 0, 0, 0.125);
        }

        .wrapper.style1 table tbody tr:nth-child(2n + 1) {
        background-color: rgba(255, 255, 255, 0.075);
        }

        .wrapper.style1 table th {
        color: #ffffff;
        }

        .wrapper.style1 table thead {
        border-color: rgba(0, 0, 0, 0.125);
        }

        .wrapper.style1 table tfoot {
        border-color: rgba(0, 0, 0, 0.125);
        }

        .wrapper.style1 table.alt tbody tr td {
        border-color: rgba(0, 0, 0, 0.125);
        }

        .wrapper.style1 input[type="submit"],
        .wrapper.style1 input[type="reset"],
        .wrapper.style1 input[type="button"],
        .wrapper.style1 button,
        .wrapper.style1 .button {
        box-shadow: inset 0 0 0 2px rgba(0, 0, 0, 0.125);
        color: #ffffff;
        }

        .wrapper.style1 input[type="submit"]:hover,
        .wrapper.style1 input[type="reset"]:hover,
        .wrapper.style1 input[type="button"]:hover,
        .wrapper.style1 button:hover,
        .wrapper.style1 .button:hover {
        background-color: rgba(255, 255, 255, 0.075);
        }

        .wrapper.style1 input[type="submit"]:active,
        .wrapper.style1 input[type="reset"]:active,
        .wrapper.style1 input[type="button"]:active,
        .wrapper.style1 button:active,
        .wrapper.style1 .button:active {
        background-color: rgba(255, 255, 255, 0.2);
        }

        @media screen and (max-width: 736px) {
        .wrapper.style1 .features li {
            border-top-color: rgba(0, 0, 0, 0.125);
        }
        }

        .wrapper.style2 {
        background-color: #2e3842;
        }

        .wrapper.style3 {
        background-color: #505393;
        color: #d3d4e4;
        }

        .wrapper.style3 strong,
        .wrapper.style3 b {
        color: #ffffff;
        }

        .wrapper.style3 h2,
        .wrapper.style3 h3,
        .wrapper.style3 h4,
        .wrapper.style3 h5,
        .wrapper.style3 h6 {
        color: #ffffff;
        }

        .wrapper.style3 hr {
        border-color: rgba(0, 0, 0, 0.125);
        }

        .wrapper.style3 blockquote {
        border-color: rgba(0, 0, 0, 0.125);
        }

        .wrapper.style3 code {
        background: rgba(255, 255, 255, 0.075);
        }

        .wrapper.style3 header p {
        color: #b9bad4;
        }

        .wrapper.style3 header.major h2,
        .wrapper.style3 header.major h3,
        .wrapper.style3 header.major h4,
        .wrapper.style3 header.major h5,
        .wrapper.style3 header.major h6 {
        border-color: rgba(0, 0, 0, 0.125);
        }

        .wrapper.style3 header.major p {
        color: #d3d4e4;
        }

        .wrapper.style3 label {
        color: #ffffff;
        }

        .wrapper.style3 input[type="text"],
        .wrapper.style3 input[type="password"],
        .wrapper.style3 input[type="email"],
        .wrapper.style3 select,
        .wrapper.style3 textarea {
        background-color: rgba(255, 255, 255, 0.075);
        }

        .wrapper.style3 select {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='40' height='40' preserveAspectRatio='none' viewBox='0 0 40 40'%3E%3Cpath d='M9.4,12.3l10.4,10.4l10.4-10.4c0.2-0.2,0.5-0.4,0.9-0.4c0.3,0,0.6,0.1,0.9,0.4l3.3,3.3c0.2,0.2,0.4,0.5,0.4,0.9 c0,0.4-0.1,0.6-0.4,0.9L20.7,31.9c-0.2,0.2-0.5,0.4-0.9,0.4c-0.3,0-0.6-0.1-0.9-0.4L4.3,17.3c-0.2-0.2-0.4-0.5-0.4-0.9 c0-0.4,0.1-0.6,0.4-0.9l3.3-3.3c0.2-0.2,0.5-0.4,0.9-0.4S9.1,12.1,9.4,12.3z' fill='rgba(0, 0, 0, 0.125)' /%3E%3C/svg%3E");
        }

        .wrapper.style3 select option {
        color: #ffffff;
        background: #505393;
        }

        .wrapper.style3 input[type="checkbox"] + label,
        .wrapper.style3 input[type="radio"] + label {
        color: #d3d4e4;
        }

        .wrapper.style3 input[type="checkbox"] + label:before,
        .wrapper.style3 input[type="radio"] + label:before {
        background: rgba(255, 255, 255, 0.075);
        }

        .wrapper.style3 input[type="checkbox"]:checked + label:before,
        .wrapper.style3 input[type="radio"]:checked + label:before {
        background: #ffffff;
        color: #505393;
        }

        .wrapper.style3 ::-webkit-input-placeholder {
        color: #b9bad4 !important;
        }

        .wrapper.style3 :-moz-placeholder {
        color: #b9bad4 !important;
        }

        .wrapper.style3 ::-moz-placeholder {
        color: #b9bad4 !important;
        }

        .wrapper.style3 :-ms-input-placeholder {
        color: #b9bad4 !important;
        }

        .wrapper.style3 .formerize-placeholder {
        color: #b9bad4 !important;
        }

        .wrapper.style3 .icon.major {
        border-color: rgba(0, 0, 0, 0.125);
        }

        .wrapper.style3 ul.alt li {
        border-color: rgba(0, 0, 0, 0.125);
        }

        .wrapper.style3 table tbody tr {
        border-color: rgba(0, 0, 0, 0.125);
        }

        .wrapper.style3 table tbody tr:nth-child(2n + 1) {
        background-color: rgba(255, 255, 255, 0.075);
        }

        .wrapper.style3 table th {
        color: #ffffff;
        }

        .wrapper.style3 table thead {
        border-color: rgba(0, 0, 0, 0.125);
        }

        .wrapper.style3 table tfoot {
        border-color: rgba(0, 0, 0, 0.125);
        }

        .wrapper.style3 table.alt tbody tr td {
        border-color: rgba(0, 0, 0, 0.125);
        }

        .wrapper.style3 input[type="submit"],
        .wrapper.style3 input[type="reset"],
        .wrapper.style3 input[type="button"],
        .wrapper.style3 button,
        .wrapper.style3 .button {
        box-shadow: inset 0 0 0 2px rgba(0, 0, 0, 0.125);
        color: #ffffff;
        }

        .wrapper.style3 input[type="submit"]:hover,
        .wrapper.style3 input[type="reset"]:hover,
        .wrapper.style3 input[type="button"]:hover,
        .wrapper.style3 button:hover,
        .wrapper.style3 .button:hover {
        background-color: rgba(255, 255, 255, 0.075);
        }

        .wrapper.style3 input[type="submit"]:active,
        .wrapper.style3 input[type="reset"]:active,
        .wrapper.style3 input[type="button"]:active,
        .wrapper.style3 button:active,
        .wrapper.style3 .button:active {
        background-color: rgba(255, 255, 255, 0.2);
        }

        @media screen and (max-width: 736px) {
        .wrapper.style3 .features li {
            border-top-color: rgba(0, 0, 0, 0.125);
        }
        }

        .wrapper.style4 {
        background-color: transparent;
        }

        .wrapper.style5 {
        background-color: #ffffff;
        color: #4e4852;
        }

        .wrapper.style5 strong,
        .wrapper.style5 b {
        color: #2e3842;
        }

        .wrapper.style5 h2,
        .wrapper.style5 h3,
        .wrapper.style5 h4,
        .wrapper.style5 h5,
        .wrapper.style5 h6 {
        color: #2e3842;
        }

        .wrapper.style5 hr {
        border-color: #dfdfdf;
        }

        .wrapper.style5 blockquote {
        border-color: #dfdfdf;
        }

        .wrapper.style5 code {
        background: rgba(0, 0, 0, 0.0375);
        }

        .wrapper.style5 header p {
        color: #8e8892;
        }

        .wrapper.style5 header.major h2,
        .wrapper.style5 header.major h3,
        .wrapper.style5 header.major h4,
        .wrapper.style5 header.major h5,
        .wrapper.style5 header.major h6 {
        border-color: #dfdfdf;
        }

        .wrapper.style5 header.major p {
        color: #4e4852;
        }

        .wrapper.style5 label {
        color: #2e3842;
        }

        .wrapper.style5 input[type="text"],
        .wrapper.style5 input[type="password"],
        .wrapper.style5 input[type="email"],
        .wrapper.style5 select,
        .wrapper.style5 textarea {
        background-color: rgba(0, 0, 0, 0.0375);
        }

        .wrapper.style5 select {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='40' height='40' preserveAspectRatio='none' viewBox='0 0 40 40'%3E%3Cpath d='M9.4,12.3l10.4,10.4l10.4-10.4c0.2-0.2,0.5-0.4,0.9-0.4c0.3,0,0.6,0.1,0.9,0.4l3.3,3.3c0.2,0.2,0.4,0.5,0.4,0.9 c0,0.4-0.1,0.6-0.4,0.9L20.7,31.9c-0.2,0.2-0.5,0.4-0.9,0.4c-0.3,0-0.6-0.1-0.9-0.4L4.3,17.3c-0.2-0.2-0.4-0.5-0.4-0.9 c0-0.4,0.1-0.6,0.4-0.9l3.3-3.3c0.2-0.2,0.5-0.4,0.9-0.4S9.1,12.1,9.4,12.3z' fill='%23dfdfdf' /%3E%3C/svg%3E");
        }

        .wrapper.style5 select option {
        color: #2e3842;
        background: #ffffff;
        }

        .wrapper.style5 input[type="checkbox"] + label,
        .wrapper.style5 input[type="radio"] + label {
        color: #4e4852;
        }

        .wrapper.style5 input[type="checkbox"] + label:before,
        .wrapper.style5 input[type="radio"] + label:before {
        background: rgba(0, 0, 0, 0.0375);
        }

        .wrapper.style5 input[type="checkbox"]:checked + label:before,
        .wrapper.style5 input[type="radio"]:checked + label:before {
        background: #2e3842;
        color: #ffffff;
        }

        .wrapper.style5 ::-webkit-input-placeholder {
        color: #8e8892 !important;
        }

        .wrapper.style5 :-moz-placeholder {
        color: #8e8892 !important;
        }

        .wrapper.style5 ::-moz-placeholder {
        color: #8e8892 !important;
        }

        .wrapper.style5 :-ms-input-placeholder {
        color: #8e8892 !important;
        }

        .wrapper.style5 .formerize-placeholder {
        color: #8e8892 !important;
        }

        .wrapper.style5 .icon.major {
        border-color: #dfdfdf;
        }

        .wrapper.style5 ul.alt li {
        border-color: #dfdfdf;
        }

        .wrapper.style5 table tbody tr {
        border-color: #dfdfdf;
        }

        .wrapper.style5 table tbody tr:nth-child(2n + 1) {
        background-color: rgba(0, 0, 0, 0.0375);
        }

        .wrapper.style5 table th {
        color: #2e3842;
        }

        .wrapper.style5 table thead {
        border-color: #dfdfdf;
        }

        .wrapper.style5 table tfoot {
        border-color: #dfdfdf;
        }

        .wrapper.style5 table.alt tbody tr td {
        border-color: #dfdfdf;
        }

        .wrapper.style5 input[type="submit"],
        .wrapper.style5 input[type="reset"],
        .wrapper.style5 input[type="button"],
        .wrapper.style5 button,
        .wrapper.style5 .button {
        box-shadow: inset 0 0 0 2px #dfdfdf;
        color: #2e3842;
        }

        .wrapper.style5 input[type="submit"]:hover,
        .wrapper.style5 input[type="reset"]:hover,
        .wrapper.style5 input[type="button"]:hover,
        .wrapper.style5 button:hover,
        .wrapper.style5 .button:hover {
        background-color: rgba(0, 0, 0, 0.0375);
        }

        .wrapper.style5 input[type="submit"]:active,
        .wrapper.style5 input[type="reset"]:active,
        .wrapper.style5 input[type="button"]:active,
        .wrapper.style5 button:active,
        .wrapper.style5 .button:active {
        background-color: rgba(0, 0, 0, 0.1);
        }

        @media screen and (max-width: 736px) {
        .wrapper.style5 .features li {
            border-top-color: #dfdfdf;
        }
        }

        @media screen and (max-width: 980px) {
        .wrapper {
            padding: 4em 3em 2em 3em;
        }
        }

        @media screen and (max-width: 736px) {
        .wrapper {
            padding: 3em 2em 1em 2em;
        }
        }

        /* Page Wrapper + Menu */

        #page-wrapper {
        -moz-transition: opacity 0.5s ease;
        -webkit-transition: opacity 0.5s ease;
        -ms-transition: opacity 0.5s ease;
        transition: opacity 0.5s ease;
        opacity: 1;
        padding-top: 3em;
        }

        #page-wrapper:before {
        background: rgba(0, 0, 0, 0);
        content: "";
        display: block;
        display: none;
        height: 100%;
        left: 0;
        position: fixed;
        top: 0;
        width: 100%;
        z-index: 10001;
        }

        #menu {
        -moz-transform: translateX(20em);
        -webkit-transform: translateX(20em);
        -ms-transform: translateX(20em);
        transform: translateX(20em);
        -moz-transition: -moz-transform 0.5s ease;
        -webkit-transition: -webkit-transform 0.5s ease;
        -ms-transition: -ms-transform 0.5s ease;
        transition: transform 0.5s ease;
        -webkit-overflow-scrolling: touch;
        background: #21b2a6;
        color: #ffffff;
        height: 100%;
        max-width: 80%;
        overflow-y: auto;
        padding: 3em 2em;
        position: fixed;
        right: 0;
        top: 0;
        width: 20em;
        z-index: 10002;
        }

        #menu ul {
        list-style: none;
        padding: 0;
        }

        #menu ul > li {
        border-top: solid 1px rgba(0, 0, 0, 0.125);
        margin: 0.5em 0 0 0;
        padding: 0.5em 0 0 0;
        }

        #menu ul > li:first-child {
        border-top: 0 !important;
        margin-top: 0 !important;
        padding-top: 0 !important;
        }

        #menu ul > li > a {
        border: 0;
        color: inherit;
        display: block;
        font-size: 0.8em;
        letter-spacing: 0.225em;
        outline: 0;
        text-decoration: none;
        text-transform: uppercase;
        }

        @media screen and (max-width: 736px) {
        #menu ul > li > a {
            line-height: 3em;
        }
        }

        #menu .close {
        background-image: url("https://html5up.net/uploads/demos/spectral/assets/css/images/close.svg");
        background-position: 4.85em 1em;
        background-repeat: no-repeat;
        border: 0;
        cursor: pointer;
        display: block;
        height: 3em;
        position: absolute;
        right: 0;
        top: 0;
        vertical-align: middle;
        width: 7em;
        }

        @media screen and (max-width: 736px) {
        #menu {
            padding: 3em 1.5em;
        }
        }

        body.is-menu-visible #page-wrapper {
        opacity: 0.35;
        }

        body.is-menu-visible #page-wrapper:before {
        display: block;
        }

        body.is-menu-visible #menu {
        -moz-transform: translateX(0);
        -webkit-transform: translateX(0);
        -ms-transform: translateX(0);
        transform: translateX(0);
        }

        /* Header */

        #header {
        -moz-transition: background-color 0.2s ease;
        -webkit-transition: background-color 0.2s ease;
        -ms-transition: background-color 0.2s ease;
        transition: background-color 0.2s ease;
        background: #2e3842;
        height: 3em;
        left: 0;
        line-height: 3em;
        position: fixed;
        top: 0;
        width: 100%;
        z-index: 10000;
        }

        #header h1 {
        -moz-transition: opacity 0.2s ease;
        -webkit-transition: opacity 0.2s ease;
        -ms-transition: opacity 0.2s ease;
        transition: opacity 0.2s ease;
        height: inherit;
        left: 1.25em;
        line-height: inherit;
        position: absolute;
        top: 0;
        }

        #header h1 a {
        border: 0;
        display: block;
        height: inherit;
        line-height: inherit;
        }

        @media screen and (max-width: 736px) {
        #header h1 a {
            font-size: 0.8em;
        }
        }

        #header nav {
        height: inherit;
        line-height: inherit;
        position: absolute;
        right: 0;
        top: 0;
        }

        #header nav > ul {
        list-style: none;
        margin: 0;
        padding: 0;
        white-space: nowrap;
        }

        #header nav > ul > li {
        display: inline-block;
        padding: 0;
        }

        #header nav > ul > li > a {
        border: 0;
        color: #fff;
        display: block;
        font-size: 0.8em;
        letter-spacing: 0.225em;
        padding: 0 1.5em;
        text-transform: uppercase;
        }

        #header nav > ul > li > a.menuToggle {
        outline: 0;
        position: relative;
        }

        #header nav > ul > li > a.menuToggle:after {
        background-image: url("https://html5up.net/uploads/demos/spectral/assets/css/images/bars.svg");
        background-position: right center;
        background-repeat: no-repeat;
        content: "";
        display: inline-block;
        height: 3.75em;
        vertical-align: top;
        width: 2em;
        }

        @media screen and (max-width: 736px) {
        #header nav > ul > li > a.menuToggle {
            padding: 0 1.5em;
        }

        #header nav > ul > li > a.menuToggle span {
            display: none;
        }
        }

        @media screen and (max-width: 736px) {
        #header nav > ul > li > a {
            padding: 0 0 0 1.5em;
        }
        }

        #header nav > ul > li:first-child {
        margin-left: 0;
        }

        #header.alt {
        background: transparent;
        }

        #header.alt h1 {
        pointer-events: none;
        opacity: 0;
        }

        /* Banner */

        #banner {
        display: -moz-flex;
        display: -webkit-flex;
        display: -ms-flex;
        display: flex;
        -moz-flex-direction: column;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        -moz-justify-content: center;
        -webkit-justify-content: center;
        -ms-justify-content: center;
        justify-content: center;
        cursor: default;
        height: 100vh;
        min-height: 35em;
        overflow: hidden;
        position: relative;
        text-align: center;
        }

        #banner h2 {
        -moz-transform: scale(1);
        -webkit-transform: scale(1);
        -ms-transform: scale(1);
        transform: scale(1);
        -moz-transition: -moz-transform 0.5s ease, opacity 0.5s ease;
        -webkit-transition: -webkit-transform 0.5s ease, opacity 0.5s ease;
        -ms-transition: -ms-transform 0.5s ease, opacity 0.5s ease;
        transition: transform 0.5s ease, opacity 0.5s ease;
        display: inline-block;
        font-size: 1.75em;
        opacity: 1;
        padding: 0.35em 1em;
        position: relative;
        z-index: 1;
        }

        #banner h2:before,
        #banner h2:after {
        -moz-transition: width 0.85s ease;
        -webkit-transition: width 0.85s ease;
        -ms-transition: width 0.85s ease;
        transition: width 0.85s ease;
        -moz-transition-delay: 0.25s;
        -webkit-transition-delay: 0.25s;
        -ms-transition-delay: 0.25s;
        transition-delay: 0.25s;
        background: #fff;
        content: "";
        display: block;
        height: 2px;
        position: absolute;
        width: 100%;
        }

        #banner h2:before {
        top: 0;
        left: 0;
        }

        #banner h2:after {
        bottom: 0;
        right: 0;
        }

        #banner p {
        letter-spacing: 0.225em;
        text-transform: uppercase;
        }

        #banner p a {
        color: inherit;
        }

        #banner .more {
        -moz-transition: -moz-transform 0.75s ease, opacity 0.75s ease;
        -webkit-transition: -webkit-transform 0.75s ease, opacity 0.75s ease;
        -ms-transition: -ms-transform 0.75s ease, opacity 0.75s ease;
        transition: transform 0.75s ease, opacity 0.75s ease;
        -moz-transition-delay: 3.5s;
        -webkit-transition-delay: 3.5s;
        -ms-transition-delay: 3.5s;
        transition-delay: 3.5s;
        -moz-transform: translateY(0);
        -webkit-transform: translateY(0);
        -ms-transform: translateY(0);
        transform: translateY(0);
        border: none;
        bottom: 0;
        color: inherit;
        font-size: 0.8em;
        height: 8.5em;
        left: 50%;
        letter-spacing: 0.225em;
        margin-left: -8.5em;
        opacity: 1;
        outline: 0;
        padding-left: 0.225em;
        position: absolute;
        text-align: center;
        text-transform: uppercase;
        width: 16em;
        z-index: 1;
        }

        #banner .more:after {
        background-image: url("https://html5up.net/uploads/demos/spectral/assets/css/images/arrow.svg");
        background-position: center;
        background-repeat: no-repeat;
        background-size: contain;
        bottom: 4em;
        content: "";
        display: block;
        height: 1.5em;
        left: 50%;
        margin: 0 0 0 -0.75em;
        position: absolute;
        width: 1.5em;
        }

        #banner:after {
        pointer-events: none;
        -moz-transition: opacity 3s ease-in-out;
        -webkit-transition: opacity 3s ease-in-out;
        -ms-transition: opacity 3s ease-in-out;
        transition: opacity 3s ease-in-out;
        -moz-transition-delay: 1.25s;
        -webkit-transition-delay: 1.25s;
        -ms-transition-delay: 1.25s;
        transition-delay: 1.25s;
        content: "";
        background: #2e3842;
        display: block;
        width: 100%;
        height: 100%;
        position: absolute;
        left: 0;
        top: 0;
        opacity: 0;
        }

        @media screen and (max-width: 736px) {
        #banner {
            padding: 7em 3em 5em 3em;
            height: auto;
            min-height: 0;
        }

        #banner h2 {
            font-size: 1.25em;
        }

        #banner br {
            display: none;
        }

        #banner .more {
            display: none;
        }
        }

        body.is-preload #banner h2 {
        -moz-transform: scale(0.95);
        -webkit-transform: scale(0.95);
        -ms-transform: scale(0.95);
        transform: scale(0.95);
        opacity: 0;
        }

        body.is-preload #banner h2:before,
        body.is-preload #banner h2:after {
        width: 0;
        }

        body.is-preload #banner .more {
        -moz-transform: translateY(8.5em);
        -webkit-transform: translateY(8.5em);
        -ms-transform: translateY(8.5em);
        transform: translateY(8.5em);
        opacity: 0;
        }

        body.is-preload #banner:after {
        opacity: 1;
        }

        /* CTA */

        #cta .inner {
        display: -moz-flex;
        display: -webkit-flex;
        display: -ms-flex;
        display: flex;
        max-width: 45em;
        }

        #cta .inner header {
        -moz-order: 1;
        -webkit-order: 1;
        -ms-order: 1;
        order: 1;
        padding-right: 3em;
        width: 70%;
        }

        #cta .inner header p {
        color: inherit;
        }

        #cta .inner .actions {
        -moz-order: 2;
        -webkit-order: 2;
        -ms-order: 2;
        order: 2;
        width: 30%;
        }

        @media screen and (max-width: 980px) {
        #cta .inner {
            display: block;
            text-align: center;
        }

        #cta .inner header {
            padding-right: 0;
            width: 100%;
        }

        #cta .inner .actions {
            margin-left: auto;
            margin-right: auto;
            max-width: 20em;
            width: 100%;
        }
        }

        @media screen and (max-width: 736px) {
        #cta .inner .actions {
            max-width: none;
        }
        }

        /* Main */

        #main > header {
        padding: 12em 0 10em 0;
        background-image: -moz-linear-gradient(
            top,
            rgba(0, 0, 0, 0.5),
            rgba(0, 0, 0, 0.5)
            ),
            url("../../images/banner.jpg");
        background-image: -webkit-linear-gradient(
            top,
            rgba(0, 0, 0, 0.5),
            rgba(0, 0, 0, 0.5)
            ),
            url("../../images/banner.jpg");
        background-image: -ms-linear-gradient(
            top,
            rgba(0, 0, 0, 0.5),
            rgba(0, 0, 0, 0.5)
            ),
            url("../../images/banner.jpg");
        background-image: linear-gradient(top, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
            url("../../images/banner.jpg");
        background-attachment: fixed;
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
        text-align: center;
        }

        #main > header h2 {
        font-size: 1.75em;
        margin: 0 0 0.5em 0;
        }

        #main > header p {
        color: inherit;
        letter-spacing: 0.225em;
        text-transform: uppercase;
        top: 0;
        }

        #main > header p a {
        color: inherit;
        }

        @media screen and (max-width: 1680px) {
        #main > header {
            padding: 10em 0 8em 0;
        }
        }

        @media screen and (max-width: 1280px) {
        #main > header {
            padding: 8em 3em 6em 3em;
        }
        }

        @media screen and (max-width: 980px) {
        #main > header {
            padding: 10em 3em 8em 3em;
        }
        }

        @media screen and (max-width: 736px) {
        #main > header {
            padding: 5em 3em 3em 3em;
        }

        #main > header h2 {
            font-size: 1.25em;
            margin: 0 0 1em 0;
        }
        }

        body.is-mobile #main > header {
        background-attachment: scroll;
        }

        /* Footer */

        #footer {
        padding: 6em 0 4em 0;
        background-color: #1d242a;
        text-align: center;
        }

        #footer .icons {
        font-size: 1.25em;
        }

        #footer .icons a {
        color: rgba(255, 255, 255, 0.5);
        }

        #footer .icons a:hover {
        color: #fff;
        }

        #footer .copyright {
        color: rgba(255, 255, 255, 0.5);
        font-size: 0.8em;
        letter-spacing: 0.225em;
        list-style: none;
        padding: 0;
        text-transform: uppercase;
        }

        #footer .copyright li {
        border-left: solid 1px rgba(255, 255, 255, 0.5);
        display: inline-block;
        line-height: 1em;
        margin-left: 1em;
        padding-left: 1em;
        }

        #footer .copyright li:first-child {
        border-left: 0;
        margin-left: 0;
        padding-left: 0;
        }

        #footer .copyright li a {
        color: inherit;
        }

        #footer .copyright li a:hover {
        color: #fff;
        }

        @media screen and (max-width: 480px) {
        #footer .copyright li {
            border: 0;
            display: block;
            line-height: 1.65em;
            margin: 0;
            padding: 0.5em 0;
        }
        }

        @media screen and (max-width: 980px) {
        #footer {
            padding: 4em 3em 2em 3em;
        }
        }

        @media screen and (max-width: 736px) {
        #footer {
            padding: 3em 2em 1em 2em;
        }
        }

        /* Landing */

        body.landing #page-wrapper {
        background-image: -moz-linear-gradient(
            top,
            rgba(0, 0, 0, 0.5),
            rgba(0, 0, 0, 0.5)
            ),
            url("https://html5up.net/uploads/demos/spectral/images/banner.jpg");
        background-image: -webkit-linear-gradient(
            top,
            rgba(0, 0, 0, 0.5),
            rgba(0, 0, 0, 0.5)
            ),
            url("https://html5up.net/uploads/demos/spectral/images/banner.jpg");
        background-image: -ms-linear-gradient(
            top,
            rgba(0, 0, 0, 0.5),
            rgba(0, 0, 0, 0.5)
            ),
            url(`https://html5up.net/uploads/demos/spectral/images/banner.jpg`);
        background-image: linear-gradient(top, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
            url("https://html5up.net/uploads/demos/spectral/images/banner.jpg");
        background-attachment: fixed;
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
        padding-top: 0;
        }

        body.landing #footer {
        background-color: rgba(29, 36, 42, 0.9);
        }

        body.is-mobile.landing #page-wrapper {
        background: none;
        }

        body.is-mobile.landing #banner,
        body.is-mobile.landing .wrapper.style4 {
        background-image: -moz-linear-gradient(
            top,
            rgba(0, 0, 0, 0.5),
            rgba(0, 0, 0, 0.5)
            ),
            url("../../images/banner.jpg");
        background-image: -webkit-linear-gradient(
            top,
            rgba(0, 0, 0, 0.5),
            rgba(0, 0, 0, 0.5)
            ),
            url("../../images/banner.jpg");
        background-image: -ms-linear-gradient(
            top,
            rgba(0, 0, 0, 0.5),
            rgba(0, 0, 0, 0.5)
            ),
            url("../../images/banner.jpg");
        background-image: linear-gradient(top, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
            url("../../images/banner.jpg");
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
        }

        body.is-mobile.landing #footer {
        background-color: #1d242a;
        }

        #banner {
        min-height: 100vh;
        }

    </style>
    <style>
        .logo {
            max-width: 40px;
            position: absolute;
            top: 20px;
            left: 20px;
            z-index: 99;
        }
    </style>
</head>
<body class="landing">
    <?php if ($logo) : ?>
        <img src="<?php echo esc_url($logo); ?>" alt="Logo" class="logo">
    <?php endif; ?>
	<!-- Page Wrapper -->
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header" class="alt">
					<h1><a href="https://html5up.net/uploads/demos/spectral/index.html">Spectral</a></h1>
					<nav id="nav">
						<ul>
							<li class="special">
								<a href="http://localhost/Spectral/#menu" class="menuToggle"><span>Menu</span></a>
								
							</li>
						</ul>
					</nav>
				</header>

			<!-- Banner -->
				<section id="banner">
					<div class="inner">
                        <h2>&mdash; <?php echo esc_html($client_name); ?> Team</h2>
                        <div class="contact-info">
                            <?php if ($client_phone) : ?>
                                <p>Telefoon: <?php echo esc_html($client_phone); ?></p>
                            <?php endif; ?>
                            <?php if ($client_email) : ?>
                                <p>E-mail: <?php echo esc_html($client_email); ?></p>
                            <?php endif; ?>
                            <?php if ($client_address) : ?>
                                <p>Adres: <?php echo esc_html($client_address); ?></p>
                            <?php endif; ?>
                            <?php if ($client_city) : ?>
                                <p>Gemeente: <?php echo esc_html($client_city); ?></p>
                            <?php endif; ?>
                        </div>
						<ul class="actions special">
							<li><a href="https://html5up.net/uploads/demos/spectral/#" class="button primary">Activate</a></li>
						</ul>
					</div>
					<a href="https://html5up.net/uploads/demos/spectral/#one" class="more scrolly">Learn More</a>
				</section>

		</div>

		<div id="menu">
			<ul>
				<li><a href="https://html5up.net/uploads/demos/spectral/index.html" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Home</a></li>
				<li><a href="https://html5up.net/uploads/demos/spectral/generic.html" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Generic</a></li>
				<li><a href="https://html5up.net/uploads/demos/spectral/elements.html" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Elements</a></li>
				<li><a href="https://html5up.net/uploads/demos/spectral/#" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Sign Up</a></li>
				<li><a href="https://html5up.net/uploads/demos/spectral/#" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Log In</a></li>
			</ul>
			<a href="https://html5up.net/uploads/demos/spectral/#menu" class="close" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></a>
		</div>

        <script>
            document.querySelector('.menuToggle').addEventListener('click', function(event) {
                event.preventDefault();
                document.body.className = "landing is-menu-visible";
            });

            document.querySelector('.close').addEventListener('click', function(event) {
                event.preventDefault();
                document.body.className = "landing";
            });

            document.querySelector('.more').addEventListener('click', function(event) {
                event.preventDefault();
            });
        </script>

</body>
</html>