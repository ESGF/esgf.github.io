#!/usr/bin/python
import shutil
import argparse
import os
from sys import argv, exit

def create_release_page(version, content):
    # contentString -> content
    file_to_read = open(content)
    contentStrings = file_to_read.readlines()
    file_to_read.close()

    # open release_base.md
    file_base = open("release_base.md")
    baseStrings = file_base.readlines()
    file_base.close()

    newStrings = []
    for line in baseStrings:
        line = line.strip()
        if line == "{version}": 
            newStrings.append("title: release" + version + "\n")
        elif line == "{content}":
            for content_line in contentStrings:
                newStrings.append(content_line)
        else:
            newStrings.append(line + "\n")

    # save as "release" + version + ".md"
    new_file_name = "release" + version + ".md"
    file_to_write = open(new_file_name, "w")
    for item in newStrings:
        file_to_write.write("%s" % item)
    file_to_write.close()

def update_relases_sidebar(version):
    sidebar_file_name = "_layouts/releases_sidebar.html"
    file_to_open = open(sidebar_file_name)
    sidebar = file_to_open.readlines()
    file_to_open.close()
    newFile = []
    
    for line in sidebar:
        sline = line.strip()
        if sline == "<!--next-->":
            newFile.append("                <li><a href='release" + version + ".html'>Release " + version + "</a></li>\n")
        else:
            newFile.append(line)

    file_to_write = open(sidebar_file_name, "w")
    for item in newFile:
        file_to_write.write("%s" % item)
    file_to_write.close()

def git(version):
    newFile = "release" + version + ".md"
    #TODO: 
    # git add newFile
    # git commit -am "AUTO: adding new release info"
    # git push

if __name__ == "__main__":

    parser = argparse.ArgumentParser(description="create and update releases pages")
    parser.add_argument("version", help="release version number eg 1.7")
    parser.add_argument("content", help="file with html or markdown content")

    args = parser.parse_args()

    if not os.path.exists(args.content):
        stderr.write("Input file %s not found." % args.content)
        exit()

    ## create page
    if create_release_page(args.version, args.content):
        print "create Error"
    else:
        print "Created release version %s page" % args.version

    ## update sidebar
    if update_relases_sidebar(args.version):
        print "update Error"
    else:
        print "updated releases_sidebar with release version %s page" % args.version

    ## push to repo
    if git(args.version):
        print "git Error"
    else:
        print "Don't forget to add / commit / push this release version %s info to the repo" % args.version


