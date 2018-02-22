#!/usr/bin/env ruby
if ARGV[0]
	str = ARGV.first.split(" ")
	str.push(str.shift)
	puts "#{str.join(" ")}"
end