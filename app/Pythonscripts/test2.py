import pandas as pd
import numpy as np
import librosa
import os
from keras.models import load_model
from sklearn.preprocessing import LabelEncoder

# Function to extract MFCC features
def extract_mfcc(filename):
    y, sr = librosa.load(filename)
    mfcc = np.mean(librosa.feature.mfcc(y=y, sr=sr, n_mfcc=40).T, axis=0)
    return mfcc

# Load the saved model
model = load_model('app\Pythonscripts\dcnn_lstm_model.h5')

# Load the label encoder used during training
label_encoder = LabelEncoder()
label_encoder.classes_ = np.array(['angry', 'disgust', 'fear', 'happy', 'neutral', 'sad', 'surprise'])

# Example audio file for testing
audio_file = ''

# Extract MFCC features from the audio file
mfcc_features = extract_mfcc(audio_file)

# Reshape the features for the model input
input_data = np.expand_dims(mfcc_features, axis=0)
input_data = np.expand_dims(input_data, axis=2)

# Make predictions using the model
predicted_probabilities = model.predict(input_data)
predicted_label = label_encoder.inverse_transform(np.argmax(predicted_probabilities, axis=1))

# Print the recognized emotion
print('Recognized Emotion:', predicted_label[0])
