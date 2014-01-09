#!/usr/bin/python
import shutil
import argparse
import os
from sys import argv, exit

def create_release_page(version, content):
    print version
    print content

    # contentString -> content
    # open release_base.md
    # replace {version} with version
    # replace {content} with contentString
    # save as "release" + version + ".md"

    # open /layouts/releases_sidebar.html
    # read to <!--next-->
    # add "<li><a href='release" + version + ".html'>Release" + version + "</a></li>

    #git pull, git commit -am "AUTO: adding new release version", git push


if __name__ == "__main__":

    parser = argparse.ArgumentParser(description="create and update releases pages")
    parser.add_argument("version", help="release version number eg 1.7")
    parser.add_argument("content", help="file with html or markdown content")

    args = parser.parse_args()

    if not os.path.exists(args.content):
        stderr.write("Input file %s not found." % args.urlFile)
        exit()

    if create_release_page(args.version, args.content):
        print "Error"
    else:
        print "Done"
