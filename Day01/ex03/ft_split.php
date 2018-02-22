#!/usr/bin/ruby
def ft_split(str)
	i = -1;
	split_array = str.split;
	puts "Array\n(";
	split_array.each{ |items| puts"	[#{i+=1}] => #{items}"}
	puts ")";
end
