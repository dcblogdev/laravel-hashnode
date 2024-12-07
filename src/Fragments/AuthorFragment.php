<?php

namespace Dcblogdev\Hashnode\Fragments;

class AuthorFragment
{
    public static function handle(): string
    {
        return '{
            id
            name
            username
            bio {
                html
                markdown
                text
            }
            profilePicture
            socialMediaLinks {
                website
                github
                twitter
                instagram
                facebook
                stackoverflow
                linkedin
                youtube
            }
            badges {
                id
                name
                description
                image
                dateAssigned
                infoURL
                suppressed
            }
            followersCount
            followingsCount
            tagline
            dateJoined
            location
            availableFor
            tagsFollowing {
                id
                name
                slug
                logo
                tagline
                info {
                   html
                    markdown
                    text 
                }
                followersCount
                postsCount
            }
            deactivated
            following
            followsBack
        }';
    }
}
