class PagesController < ApplicationController

  def index
  end
  

  def image
    file = params['file']
    puts file.tempfile.path
   # image = MiniMagick::Image.new(file.tempfile.path)
    #image.format "png":
    #image.resize "100x100"
    #pic = S3_BUCKET.object("#{params['id']}.#{params['version']}.jpg")
    #pic.put(body: file)
    render json: {"file_name": "3.png", "tags": "#banna #sea #friends"}, status: :ok
  end
  
  def Tofacebook
 	require 'net/http'
	require 'uri'

	uri = URI.parse("https://graph.facebook.com/v2.10/me/photos")
	request = Net::HTTP::Post.new(uri)
	request.set_form_data(
	  "url" => "http://i3.kym-cdn.com/photos/images/newsfeed/000/308/470/6c5.png",
	  "caption" => "#dog #meme", # replace with tags predicted by net.
	  "access_token" => "EAAWIeO9pIysBAIePqhOxqUJjT9LVlnRoi2rJzTZCeZAiT33hxRWaGeZBZBqpVmfNV9FQNf8NUlZCiZCkWZBxYVf2ZC3RKpiPStlHchZB396MELEtIA04UXyPYBhZC9dEZBWq6TIUmZCx9K351MEZC2oSZAhapVPDxXHLsum0f9DHCDuWuQZCOKdQJt2yzKTXJc0ZCqBa4HQZD", # replace with developer access token.
	)

	req_options = {
  	use_ssl: uri.scheme == "https",
	}

	response = Net::HTTP.start(uri.hostname, uri.port, req_options) do |http|
  	http.request(request)
	end
	render json: "OK", status: :ok
	# response.code
	# response.body
  end 


end
