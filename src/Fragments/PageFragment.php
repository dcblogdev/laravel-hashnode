<?php

namespace Dcblogdev\Hashnode\Fragments;

class PageFragment
{
    public static function handle(): string
    {
        return '{
                id
                title
                slug
                content {
                    html,
                    markdown
                    text
                },
                hidden
                ogMetaData {
                    image,
                }
                seo {
                    description
                }
            }
        }';
    }
}
