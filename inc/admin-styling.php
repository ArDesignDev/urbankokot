<?php

add_action('admin_head', 'my_acf_admin_styles');
function my_acf_admin_styles() {
    echo '<style>
        /* General Styling */
		/*
        .edit-post-meta-boxes-area .postbox {
            border-top: 2px solid #222 !important;
        } */

		.edit-post-meta-boxes-area .postbox:nth-of-type(even) {
			background-color: #f6f7f7;
		}

		#editor .postbox>.postbox-header .hndle {
		   font-size: 20px;
		}

		.postbox-header:hover {
		   background-color: #deeff7 !important;
		}
/*
		.postbox-header:hover .ui-sortable-handle {
		  color: #fff !important;
		}*/

    </style>';
}