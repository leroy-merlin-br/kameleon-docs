OPEN = $(shell which xdg-open || which gnome-open || which open)

serve:
	php -S 127.0.0.1:8000 -t public/
