import PyPDF2
from gtts import gTTS
import os
import sys

def convert_pdf_to_audio(pdf_path, output_dir, language='en'):
    try:
        # Check if the PDF file exists
        if not os.path.exists(pdf_path):
            print(f"Error: PDF file '{pdf_path}' does not exist.")
            return False

        # Extract the filename without extension
        base_filename = os.path.splitext(os.path.basename(pdf_path))[0]

        # Define the output MP3 file path (ensure it goes to public/storage/audio/)
        output_mp3_path = os.path.join(output_dir, base_filename + '.mp3')

        # Open the PDF file
        with open(pdf_path, 'rb') as file:
            reader = PyPDF2.PdfReader(file)
            text = ""

            # Extract text from each page
            for page_num in range(len(reader.pages)):
                page_text = reader.pages[page_num].extract_text()
                if page_text:  # Ensure page text is not None
                    text += page_text

        if not text.strip():
            print("Error: No text found in the PDF.")
            return False

        # Convert extracted text to speech using gTTS
        tts = gTTS(text=text, lang=language)
        tts.save(output_mp3_path)

        print(f"Audio file saved as {output_mp3_path}")
        return True

    except Exception as e:
        print(f"Error during conversion: {e}")
        return False

if __name__ == "__main__":
    if len(sys.argv) != 3:
        print("Usage: python convert_pdf_to_audio.py <pdf_path> <output_dir>")
        sys.exit(1)

    # The first argument is the PDF path, the second is the output directory
    pdf_file_path = sys.argv[1]
    output_directory = sys.argv[2]

    # Ensure the output directory exists
    if not os.path.exists(output_directory):
        os.makedirs(output_directory)

    # Attempt the conversion
    success = convert_pdf_to_audio(pdf_file_path, output_directory)

    if success:
        print("Conversion completed successfully.")
    else:
        print("Failed to convert PDF to audio.")
