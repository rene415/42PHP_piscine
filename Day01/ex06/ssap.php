#!/usr/bin/env ruby

final_array = []
ARGV.each do |array|
	final_array.concat(array.split(" "))
end
puts final_array.sort