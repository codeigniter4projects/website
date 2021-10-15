<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class MyBB extends BaseConfig
{
    /**
     * --------------------------------------------------------------------------
     * MyBB Forum ID
     * --------------------------------------------------------------------------
     *
     * Code for the news forum in our MyBB
     */
    public $newsForumId = 2;

    /**
     * --------------------------------------------------------------------------
     * MyBB Usernames
     * --------------------------------------------------------------------------
     *
     * An array of user names to restrict our search for news articles to.
     * This simply helps limit the work to do.
     */
    public $newsUsernames = ['ciadmin', 'jlp', 'kilishan', 'Narf'];

    /**
     * --------------------------------------------------------------------------
     * MyBB Forum URL
     * --------------------------------------------------------------------------
     *
     * The link to direct visitors to for our forum
     */
    public $forumURL = 'https://forum.codeigniter.com';
}
