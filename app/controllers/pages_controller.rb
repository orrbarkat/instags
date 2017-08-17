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
end
