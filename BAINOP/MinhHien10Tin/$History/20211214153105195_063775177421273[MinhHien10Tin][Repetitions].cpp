#include <bits/stdc++.h>
#include <string>
using namespace std;
using std::string;
#define lli long long int
lli length[100000000]={},dem;
int main(){

    if (fopen ("Repetitions.inp","r")){
        freopen ("Repetitions.inp","r",stdin);
        freopen ("Repetitions.out","w",stdout);
    }
    string s;
    cin>>s;
    lli maxx=0;
    for (int i=0;i<s.size();i++){
            length[i]=0;
 //      for (int j=0;j<s.size();j++) {

    if (s[i]==s[i+1]) length[i]=length[i-1]+1;
    else length[i]=length[i-1];
    maxx = max (maxx, length[i]);
 //      }
    }
    cout<<maxx;
}
