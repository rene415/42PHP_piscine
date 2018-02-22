#!/usr/bin/env ruby

def is_numeric(int)
    true if Integer(int) rescue false
 end

loop do
	print "Enter a number: ";

	input = gets;
	break unless input
	i = input.chomp;
	if (is_numeric(i) == false)
		puts"'#{i}' is not a number"
	elsif (i.to_i%2 == 0)
		puts"The number #{i} is even";
	elsif (i.to_i%2 != 0)
		puts"The number #{i} is odd";
	end
end
